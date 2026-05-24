<?php

namespace App\Http\Controllers;

use App\Staking;
use App\Stake;
use Auth;
use App\site_settings;
use Session;
use Illuminate\Support\Facades\Mail;
use App\activities;
use App\ref_set;
use Illuminate\Http\Request;

class StakingController extends Controller
{

    public function __construct()
    {
      $user = Auth::User();
      $this->st = site_settings::find(1);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $stakings = Staking::where('user_id', $user->id)->paginate(10);
        return view('user.my_staking', [
            'stakings' => $stakings
        ]);
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {        
        $user = Auth::User();
  
        if($this->st->investment != 1 )
        {
          Session::put('msgType', "err");              
          Session::put('status', 'Staking disabled! You will be notified when it is available.');
          return back();
        }
  
        if($user->status == 'Blocked' || $user->status == 2 )
        {
          Session::put('msgType', "err");              
          Session::put('status', 'Account Blocked! Please contact support.');
          return redirect('/login');
        }
  
        if($user->status == 'pending' || $user->status == 0 )
        {
          Session::put('msgType', "err");              
          Session::put('status', 'Account not activated! Please contact support.');
          return redirect('/login');
        }
  
  
  
        if(!empty($user))
        {            
            
          try
          {     
            $capital = $req->input('capital');
            $pack = Stake::find($req->input('p_id'));
  
            if($user->wallet < $capital)
            {
              Session::put('status', 'Your wallet balance is lower than capital.');
              Session::put('msgType', "err");
              return back();
            }
            
            if($user->wallet < $pack->min)
            {
              Session::put('status', 'Wallet balance is lower than minimum Staking.');
              Session::put('msgType', "err");
              return back();
            }
            
            if($capital > $pack->max)
            {
              Session::put('status', 'Input Capital is greater than maximum Staking.');
              Session::put('msgType', "err");
              return back();
            }
            
            if($capital < $pack->min)
            {
              Session::put('status', 'Input Capital is less than minimum Staking.');
              Session::put('msgType', "err");
              return back();
            }
  
            if($capital >= $pack->min && $capital <= $pack->max) 
            {
              $inv = new Staking;
              $inv->capital = $capital;
              $inv->user_id = $user->id;
              $inv->usn = $user->username;
              $inv->package = $pack->package_name;
              $inv->date_invested = date("Y-m-d");
              $inv->period = $pack->period;    
              $inv->days_interval = $pack->days_interval;          
              $inv->i_return = (round($capital*$pack->daily_interest*$pack->period,2));
              $inv->interest = $pack->daily_interest;
              // $no = 0;
              $dt = strtotime(date('Y-m-d'));
              $days = $pack->period;
              
              while ($days > 0) 
              {
                  $dt    +=   86400   ;     
                  $actualDate = date('Y-m-d', $dt);                  
                  $days--;
              }  
  
              $inv->package_id = $pack->id;
              $inv->currency = $this->st->currency;
              $inv->end_date = $actualDate;
              $inv->last_wd = date("Y-m-d");
              $inv->status = 'Active';
  
              $user->wallet -= $capital;
              $user->save();
              
              $inv->save();
  
              if(!empty($user->referal))
              {
                $ref_bonuses = ref_set::all();
                
                if(env('REF_TYPE') == 'Once' && count($ref_bonuses) > 0)
                {
                  $ref_cnt = env('REF_LEVEL_CNT');
                  $new_ref_user = $user->referal;
                  $itr_cnt = 0;                
  
                  $refExist = ref::where('user_id', $user->id)->get();
                  if(count($refExist) == 0)
                  {
                      while ($itr_cnt <= $ref_cnt-1)
                      {
                          $refUser = User::where('username', $new_ref_user)->get();
                          if(count($refUser) > 0)
                          {
                              $ref = new ref;
                              $ref->user_id = $user->id;
                              $ref->username = $new_ref_user;
                              $ref->wdr = 0;
                              $ref->currency = env('CURRENCY');
                              $ref->amount = $capital * $ref_bonuses[$itr_cnt]->val;
                              $ref->level = $itr_cnt+1;
                              $ref->save();
                  
                              $refUser[0]->ref_bal += $capital * $ref_bonuses[$itr_cnt]->val;
                              $new_ref_user = $refUser[0]->referal;   
                              $refUser[0]->save(); 
                          }                    
                          $itr_cnt += 1; 
                          if(env('REF_SYSTEM') == 'Single_level')
                          {
                            break;
                          }
                      }
                                
                  }                
                  
                }
                if(env('REF_TYPE') == 'Continous' && count($ref_bonuses) > 0)
                {
                  $ref_cnt = env('REF_LEVEL_CNT');
                  $new_ref_user = $user->referal;
                  $itr_cnt = 0;    
  
                  while ($itr_cnt <= $ref_cnt-1)
                  {
                      $refUser = User::where('username', $new_ref_user)->get();
                      if(count($refUser) > 0)
                      {
                          $ref = new ref;
                          $ref->user_id = $user->id;
                          $ref->username = $new_ref_user;
                          $ref->wdr = 0;
                          $ref->currency = env('CURRENCY');
                          $ref->amount = $capital * $ref_bonuses[$itr_cnt]->val;
                          $ref->level = $itr_cnt+1;
                          $ref->save();
                      
                          $refUser[0]->ref_bal += $capital * $ref_bonuses[$itr_cnt]->val;
                          $refUser[0]->save(); 
                          $new_ref_user = $refUser[0]->referal;   
                      }                    
                      $itr_cnt += 1; 
                      if(env('REF_SYSTEM') == 'Single_level')
                      {
                          break;
                      }
                  }
                }
              }
              
              $maildata = ['email' => $user->email, 'username' => $user->username];
              Mail::send('mail.user_stake_notification', ['md' => $maildata], function($msg) use ($maildata){
                  $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                  $msg->to($maildata['email']);
                  $msg->subject('User Staking');
              });
  
              $maildata = ['email' => $user->email, 'username' => $user->username];
              Mail::send('mail.admin_stake_notification', ['md' => $maildata], function($msg) use ($maildata){
                  $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                  $msg->to(env('SUPPORT_EMAIL'));
                  $msg->subject('User Staking');
              });
  
              $act = new activities;
              $act->action = "User Invested ".$capital." in ".$pack->package_name." package";
              $act->user_id = $user->id;
              $act->save();
  
              Session::put('status', "Staking Successful");
              Session::put('msgType', "suc");
              return back() ;
            }
            else
            {
              Session::put('status', "Invalid amount! Try again.");
              Session::put('msgType', "err");
              return back();
            }            
                                  
          }
          catch(\Exception $e)
          {
              Session::put('status', "Error creating Staking! Please Try again.".$e->getMessage());
              Session::put('msgType', "err");
              return back();
          }                 
            
        }
        else
        {
          return redirect('/');
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staking  $staking
     * @return \Illuminate\Http\Response
     */
    public function show(Staking $staking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staking  $staking
     * @return \Illuminate\Http\Response
     */
    public function edit(Staking $staking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staking  $staking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staking $staking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staking  $staking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staking $staking)
    {
        //
    }

    public function wd_staking(Request $req)
    {        
        $user = Auth::User();
  
        if($user->status == 'pending' || $user->status == 0 )
        {
          Session::put('msgType', "err");              
          Session::put('status', 'Account not activated! Please contact support.');
          return redirect('/login');
        }
  
        if($user->status == 'Blocked' || $user->status == 2 )
        {
          Session::put('msgType', "err");              
          Session::put('status', 'Account Blocked! Please contact support.');
          return redirect('/login');
        }
  
        if(!empty($user))
        {            
          
          try
          {  
  
            // $amt = $req->input('amt');
            
            if($req->input('pack_type') == 'xpack')
            {
                $pack = xpack_inv::find($req->input('p_id'));
            }
            else
            {
                $pack = Staking::find($req->input('p_id'));
            }
  
            $in = $pack;
            $withdrawable = 0;
            $ended = '';
  
            $totalElapse = getDays(date('Y-m-d'), $in->end_date);
            if($totalElapse == 0)
            {
                $lastWD = $in->last_wd;
                $enddate = ($in->end_date);
                $Edays = getDays($lastWD, $enddate);
                $ern  = $Edays*$in->interest*$in->capital;
                $withdrawable = $ern;              
                $totalDays = getDays($in->date_invested, $in->end_date);
                $ended = "yes";
            }
            else
            {
                $lastWD = $in->last_wd;
                $enddate = (date('Y-m-d'));
                $Edays = getDays($lastWD, $enddate);
                $ern  = $Edays*$in->interest*$in->capital;
                $withdrawable = 0;
                if ($Edays >= $in->days_interval)
                {
                    $withdrawable = $in->days_interval*$in->interest*$in->capital;
                }                                         
                $totalDays = getDays($in->date_invested, date('Y-m-d'));
                $ended = "no";
            }
  
            if($req->input('amt') != $withdrawable)
            {
              return back()->with([
                'toast_msg' => 'Invalid amount!',
                'toast_type' => 'err'
              ]);
            }
            
            $amt = $withdrawable;
  
            if($amt <= 0)
            {
              return back()->with([
                'toast_msg' => 'Invalid amount/Package Expired!',
                'toast_type' => 'err'
              ]);
            }
  
            if($ended == 'yes')
            {
              if($pack->status != 'Expired')
              {
                  $user->wallet += $pack->capital;
                  $user->save();
              }
              $pack->last_wd = $pack->end_date;
              $pack->status = 'Expired';
  
            }    
            else
            {
                
              $dt = strtotime($pack->last_wd);
              $days = $pack->days_interval;
             
              while ($days > 0) 
              {
                $dt    +=   86400   ;     
                $actualDate = date('Y-m-d', $dt);
                // if (date('N', $dt) < 6) 
                // {
                    $days--;
                //}
              }
              $pack->last_wd = $actualDate;
            }
            
            $pack->w_amt += $amt;            
            $pack->save();
  
            $usr = User::find($user->id);
            $usr->wallet += $amt;
            $usr->save();
  
            $act = new activities;
            $act->action = "User withdrawn to wallet from ".$pack->package.'package. package id: '.$pack->id;
            $act->user_id = $user->id;
            $act->save();
  
            Session::put('status', 'Staking Withdrawal Successful, Amount Withdrawn Has Been Added to your Wallet');
            Session::put('msgType', "suc");
            return back();
  
          }
          catch(\Exception $e)
          {
            Session::put('status', 'Error submitting your withdrawal');
            Session::put('msgType', "err");
            return back();
          }
            
        }
        else
        {
          return redirect('/');
        }
    }
}
