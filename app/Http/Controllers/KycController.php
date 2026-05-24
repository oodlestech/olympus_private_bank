<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Kyc;
use Auth;
use Illuminate\Http\Request;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try
        {
          if($req['cardtype'] == 'idcard_op' || $req['cardtype'] == 'driver_op' )
          {
            if($req->hasFile('id_front') && $req->hasFile('id_back'))
            {
              
              $file = $req->file('selfie');  
              $pathSelfie = time()  . "_" .  $file->getClientOriginalName();      
              $file->move('img/kyc', $pathSelfie);
              $file = $req->file('id_front'); 
              $IdFront = time()  . "_" .  $file->getClientOriginalName();       
              $file->move('img/kyc', $IdFront);
              $file = $req->file('id_back'); 
              $pathIdBack = time()  . "_" .  $file->getClientOriginalName();       
              $file->move('img/kyc', $pathIdBack);
              $file = $req->file('utility_doc');      
              $pathTime = time()  . "_" .  $file->getClientOriginalName();  
              $file->move('img/kyc', $pathTime);
    
              $kyc = new kyc;
              $kyc->status = 0;
              $kyc->user_id = $user->id;
              $kyc->username = $user->username;
              $kyc->card_type = $req['cardtype'];
              $kyc->selfie = $pathSelfie;
              $kyc->front_card = $IdFront;
              $kyc->back_card = $pathIdBack;
              $kyc->address_proof = $pathTime;
    
              $kyc->save();
    
              $maildata = ['email' => $user->email, 'username' => $user->username];
              Mail::send('mail.admin_kyc_not', ['md' => $maildata], function($msg) use ($maildata){
                  $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                  $msg->to(env('SUPPORT_EMAIL'));
                  $msg->subject('Know Your Customer');
              });
    
              return redirect()->back()->with([
                'toast_msg' => 'File Uplaoded successfully. Admin will verify your documents shortly.',
                'toast_type' => 'suc'
              ]);
            }
            else
            {
              return redirect()->back()->with([
                'toast_msg' => 'One of the required files not submitted',
                'toast_type' => 'err'
              ]);
            }
          }
          elseif ($req['cardtype'] == 'passport_op') 
          {
            if($req->hasFile('pas_id_front'))
            { 
              
              $file = $req->file('selfie');  
              $pathSelfie = time()  . "_" .  $file->getClientOriginalName();      
              $file->move('img/kyc', $pathSelfie);

              $file = $req->file('utility_doc');      
              $pathTime = time()  . "_" .  $file->getClientOriginalName();  
              $file->move('img/kyc', $pathTime);

              $file = $req->file('pas_id_front'); 
              $IdFront = time()  . "_" .  $file->getClientOriginalName();       
              $file->move('img/kyc', $IdFront);
    
              $kyc = new kyc;
              $kyc->status = 0;
              $kyc->user_id = $user->id;
              $kyc->username = $user->username;
              $kyc->card_type = $req['cardtype'];
              $kyc->selfie = $pathSelfie;
              $kyc->front_card = $IdFront;
              // $kyc->back_card = $pathIdBack;
              $kyc->address_proof = $pathTime;
    
              $kyc->save();
    
    
              $maildata = ['email' => $user->email, 'username' => $user->username];
              Mail::send('mail.admin_kyc_not', ['md' => $maildata], function($msg) use ($maildata){
                  $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                  $msg->to(env('SUPPORT_EMAIL'));
                  $msg->subject('Know Your Customer');
              });
    
              return redirect()->back()->with([
                'toast_msg' => 'File Uplaoded successfully. Admin will verify your documents shortly.',
                'toast_type' => 'suc'
              ]);
            }
            else
            {
              return redirect()->back()->with([
                'toast_msg' => 'One of the required files not submitted',
                'toast_type' => 'err'
              ]);
            }
          }
          else
          {
            return redirect()->back()->with([
                'toast_msg' => 'Please select a documnet type and upload the reqiured files.',
                'toast_type' => 'err'
              ]);
          }
        }
        catch(\Exception $e)
        {
          return redirect()->back()->with([
            'toast_msg' => $e->getMessage(),
            'toast_type' => 'err'
          ]);
        }
      }
      

    /**
     * Display the specified resource.
     *
     * @param  \App\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function show(Kyc $kyc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function edit(Kyc $kyc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kyc $kyc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kyc $kyc)
    {
        //
    }
}
