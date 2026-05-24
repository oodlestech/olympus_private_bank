<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RecieverController extends Controller
{
       // login user
  public function fetch_reciever(Request $req)
  {
    

    try
    {

        $usr = User::where('account_number', $req->input('account_number'))->first();
            
        if($usr)
        {
            $response = [
                'firstname' => $usr->firstname,
                'lastname' => $usr->lastname,
                'username' => $usr->username,
                'msg' => 'Account Retrieved',
                'type' => 'suc'
            ];  
        }
        else{
            $response = [
                'msg' => 'Invalid account number',
                'type' => 'err'
            ];       
        } 
        
        return response()->json($response);

        
    }
    catch(\Exception $e)
    {      
      $response = [
        'msg' => $e->getMessage(),
        'type' => 'err'
      ];

      return response()->json($response);

    }
  }
      
}