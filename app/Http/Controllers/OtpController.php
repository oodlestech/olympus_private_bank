<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\User;
use Session;
use Validator;
use App\fund_transfer_out;
use App\fund_transfer;
use App\activities;




class OtpController extends Controller
{
      public function pre_user_wallet_wd(Request $req){

        $user = Auth::User();
        $otp = rand(10000, 99999);
    
        if(!empty($user))
          {         
            try
            {  
    
              $usr = User::find($user->id);
              $usr->otp = intval($otp);
              $usr->save();
    
    
    
              $maildata = ['email' => $user->email, 'username' => $user->username, 'otp' => $otp];
              Mail::send('mail.wd_otp_notification', ['md' => $maildata], function($msg) use ($maildata){
                  $msg->from(env('MAIL_USERNAME'), env('APP_NAME'));
                  $msg->to($maildata['email']);
                  $msg->subject('Withdrawal OTP');
              });
    
              
              Session::put('status', 'An otp has been sent to your email');
              Session::put('msgType', "suc");
              return back();
            }
            catch(\Exception $e)
            {
              Session::put('status', $e->getMessage());
              Session::put('msgType', "err");
              return back();
            }
              
          }
          else
          {
            return redirect('/');
          }
    
      }

      public function user_send_fund(Request $req)
      {        
          $user = Auth::User();
    
          if(empty($user))
          {
            return redirect('/');
          }
    
    
          $validator = Validator::make($req->all(), [
              'account_number' => 'required|numeric', 
              'recievers_username' => 'required|string', 
              's_amt' => 'required|numeric',
              'otp' => 'required|numeric',
              'recievers_name' => 'required|string',

          ]);
    
          if($validator->fails()){
              Session::put('err_send', $validator->errors()->first());
              Session::put('status', $validator->errors()->first());      
              Session::put('msgType', "err");
              return back();
          }
          
          if($user->account_number == $req->input('account_number'))
          {
              Session::put('err_send', "You cannot send fund to yourself");
              Session::put('status', 'You cannot send fund to yourself');      
              Session::put('msgType', "err");
              return back();
          }        
         
          if($user->wallet < 10)
          {
              Session::put('err_send', "Wallet balance is less than minimum!");
              Session::put('status', 'Wallet balance is less than minimum!');      
              Session::put('msgType', "err");
              return back();
          }
          
                  
          if($user->wallet < intval($req->input('s_amt')) )
          {
              Session::put('err_send', "Insufficient amount!");
              Session::put('status', 'Wallet balance is lower than input amount!');      
              Session::put('msgType', "err");
              return back();
          }


          if(intval($user->otp) !== intval($req->input('otp')) )
          {
              Session::put('err_send', "Invalid OTP!");
              Session::put('status', 'Invalid OTP!');      
              Session::put('msgType', "err");
              return back();
          }
          
          try
          {
              $rec = User::where('account_number', trim($req->input('account_number')))->get();
              if(count($rec) < 1)
              {
                  Session::put('err_send', "Acount record not found!");
                  Session::put('status', 'User record not found!');      
                  Session::put('msgType', "err");
                  return back();
              }
              
                
              $amt = intval($req->input('s_amt'));
                
                
              $rec[0]->wallet += $amt;
              $rec[0]->save();
              
              $user->wallet -=  intval($req->input('s_amt'));
              $user->save();
              
              $rc = new fund_transfer;
              $rc->from_usr = $user->username;
              $rc->to_usr = $req->input('recievers_username');
              // trim($req->input('account_number'));
              $rc->amt = intval($req->input('s_amt'));
              $rc->save();
              
              $act = new activities;
              $act->action = "User send fund of ".$user->currency.intval($req->input('s_amt'))." to ".trim($req->input('account_number'));
              $act->user_id = $user->id;
              $act->save();
              
              Session::put('status', 'Your transaction was successful');      
              Session::put('msgType', "suc");
              return back();
          }
          catch(\Exception $e)
          {
              Session::put('err_send', $e->getMessage());
              Session::put('status', 'Error sending fund to another user!');      
              Session::put('msgType', "err");
              return back();
          }
    
      }
      
      public function user_send_fund_out(Request $req)
      {        
          $user = Auth::User();
    
          if(empty($user))
          {
            return redirect('/');
          }
    
    
          $validator = Validator::make($req->all(), [
              'bank_name' => 'required|string', 
              'acct_no' => 'required|numeric', 
              'acct_name' => 'required|string',
              'ctry' => 'required|string',
              'amount' => 'required|numeric', 
              'routing_no' => 'required|string',
              'otp' => 'required|string',

          ]);
    
          if($validator->fails()){
              Session::put('err_send', $validator->errors()->first());
              Session::put('status', $validator->errors()->first());      
              Session::put('msgType', "err");
              return back();
          }
           
         
          if($user->wallet < 10)
          {
              Session::put('err_send', "Wallet balance is less than minimum!");
              Session::put('status', 'Wallet balance is less than minimum!');      
              Session::put('msgType', "err");
              return back();
          }
          
                  
          if($user->wallet < intval($req->input('amount')) )
          {
              Session::put('err_send', "Insufficient amount!");
              Session::put('status', 'Wallet balance is lower than input amount!');      
              Session::put('msgType', "err");
              return back();
          }


          if(intval($user->otp) !== intval($req->input('otp')) )
          {
              Session::put('err_send', "Invalid OTP!");
              Session::put('status', 'Invalid OTP!');      
              Session::put('msgType', "err");
              return back();
          }
          
          try
          {
              
              
              
              $user->wallet -=  intval($req->input('amount'));
              $user->save();
              
              $rc = new fund_transfer_out;
              $rc->userid = $user->id;
              $rc->sender = $user->firstname . $user->lastname;
              $rc->bank_name = $req->input('bank_name');
              $rc->acct_no = intval($req->input('acct_no'));
              $rc->acct_name = $req->input('acct_name');
              $rc->country = $req->input('ctry');
              $rc->amount = $req->input('amount');
              $rc->routing_no = intval($req->input('routing_no'));
              $rc->save();
              
              $act = new activities;
              $act->action = "User send fund of ".$user->currency.intval($req->input('amount'))." to ".trim($req->input('bank_name'));
              $act->user_id = $user->id;
              $act->save();
              
              Session::put('status', 'Transaction processing');      
              Session::put('msgType', "suc");
              return back();
          }
          catch(\Exception $e)
          {
              Session::put('err_send', $e->getMessage());
              Session::put('status', 'Error sending fund to another bank!');      
              Session::put('msgType', "err");
              return back();
          }
    
      }
      
}
