<?php

namespace App\Http\Controllers;

use App\ProfilePic;
use Auth;
use App\User;
use App\activities;
use Session;
use Illuminate\Http\Request;

class ProfilePicController extends Controller
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
        if(!empty($user))
        {  
          try
          {
            $validate = $req->validate([
             'prPic' => 'required|image|mimes:jpeg,png,jpg|max:500',            
            ]);
  
            $file = $req->file('prPic');
            $path = time()  . "_" .  $file->getClientOriginalName();       
            $file->move('img/profile', $path);
            // $path = $user->username.".jpg"; //$req->file('u_file')->store('public/post_img');
            // $file->move(base_path().'/public/img/profile', $path);
            
            $usr = User::find($user->id);
            $usr->img = $path;
            $usr->save();
  
            $act = new activities;
            $act->action = "User updated profile picture";
            $act->user_id = $user->id;
            $act->save();
  
            Session::put('status', "Successful");
            Session::put('msgType', "suc");
            return back();
          }
          catch(\Exception $e)
          {
            Session::put('status', "Error uploading image or invalid image file");
            Session::put('msgType', "err");
            return back();;
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
     * @param  \App\ProfilePic  $profilePic
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilePic $profilePic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfilePic  $profilePic
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilePic $profilePic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfilePic  $profilePic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilePic $profilePic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfilePic  $profilePic
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilePic $profilePic)
    {
        //
    }
}
