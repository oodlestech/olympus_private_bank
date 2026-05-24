<?php

namespace App\Http\Controllers;

use App\Stake;
use Session;
use Validator;
use App\adminLog;
use App\site_settings;
use Illuminate\Http\Request;

class StakeController extends Controller
{

    public function __construct()
    {
        // parent::__construct(); 
        $this->settings = site_settings::find(1);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session::has('adm') && !empty(Session::get('adm')))
        { 
            return view('admin.add_stake');
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      if(Session::has('adm') && !empty(Session::get('adm')))
      { 
          $val = Validator::make($req->all(),[
              'package_name' => 'required|string|max:15',
              'min' => 'required|numeric',
              'max' => 'required|numeric',
              'coin_in' => 'required|string|max:20',
              'coin_out' => 'required|string|max:20',
              'interest' => 'required|numeric',            
              'period' => 'required|numeric',
              'interval' => 'required|numeric',
          ]);
          
          if($val->fails())
          {
              $toast_msg = ['msg' => $val->errors()->first(), 'type' => 'err'];
              return json_encode($toast_msg);
          }
          if((INT)$req->input('period') % (INT)$req->input('interval') != 0)
          {
              $toast_msg = ['msg' => "Staking Period must be completely divisible by Staking withdrawal interval", 'type' => 'err'];
              return json_encode($toast_msg);
          }
          try
          {
              $interest_calc = ($req->input('interest')/100)/$req->input('period');
              $pack = new Stake;
              $pack->package_name = $req->input('package_name');
              $pack->currency = $this->settings->currency;
              $pack->min = $req->input('min');
              $pack->max = $req->input('max');
              $pack->coin_in = $req->input('coin_in');
              $pack->coin_out = $req->input('coin_out');
              $pack->daily_interest = $interest_calc;
              $pack->withdrwal_fee = env('WD_FEE');
              $pack->period = $req->input('period');
              $pack->days_interval = $req->input('interval');
              $pack->ref_bonus = 0;
              $pack->status = 1;
              $pack->save();
          }
          catch(\Exception $e)
          {
              $toast_msg = ['msg' => $e->getMessage(), 'type' => 'err'];
              return json_encode($toast_msg);
          }
          
          $toast_msg = ['msg' => 'Pool added successfuly!', 'type' => 'suc'];
          return json_encode($toast_msg);
      }
      else
      {
          return redirect('/');
      }
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Stake  $stake
     * @return \Illuminate\Http\Response
     */
    public function show(Stake $stake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stake  $stake
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {        
      //
              
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stake  $stake
     * @return \Illuminate\Http\Response
     */
    public function editStake(Request $req)
    {        
      if(Session::has('adm') && !empty(Session::get('adm')))
      {
        try
        {
          $pack = Stake::find($req->input('p_id'));
          // $pack->package_name = $req->input('package_name');
          $pack->min = $req->input('min');
          $pack->currency = $this->settings->currency;
          $pack->max = $req->input('max');
          $pack->coin_out = $req->input('coin_out');
          $pack->daily_interest = ($req->input('interest') / 100)/$pack->period;
          // $pack->withdrwal_fee = ($req->input('fee'))/100;
          $pack->save();
  
          $adm = Session::get('adm'); 
          $act = new adminLog;
          $act->admin = $adm->email;
          $act->action = "Edited Staking Pool. Pool id: ".$req->input('p_id');
          $act->save();
  
          return back()->with([
            'toast_msg' => 'Successful!',
            'toast_type' => 'suc'
          ]);
        }
        catch(\Exception $e)
        {
          return back()->with([
            'toast_msg' => 'Error saving record! Try again!',
            'toast_type' => 'err'
          ]);
        }
        
      }
      else
      {
        return redirect('/');
      }
              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stake  $stake
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stake $id){
        if(Session::has('adm') && !empty(Session::get('adm')))
        { 
          try{
            Stake::where('id', $id)->delete();
            return json_encode('["rst" => "suc"]');
          }
          catch (\Exception $ex){
            return json_encode('["rst" => "err"]');
          }     
        }
        else
        {
            return redirect('/');
        }
    }
}
