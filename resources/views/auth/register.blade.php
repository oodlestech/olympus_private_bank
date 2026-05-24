
@extends('inc.auth_layout')
@section('content')
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="" style="background:linear-gradient(to right, #008855, #6386e4)">
        <div class="container">
            <div class="account-title text-center">
                {{-- <a href="../" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To {{$settings->site_title}}</span></span></a> --}}
                <a href="/index" class="logo">
                    <img width="100px" src="img/logo.png" alt="logo">                </a>
            </div>
            <div class="account-wrapper" style="max-width: 80%">
                <!-- <div class="account-header">
                    <h4 class="title">Let's get started</h4>
                    <a href="#0" class="sign-in-with"><img src="/assets2/images/icon/google.png" alt="icon"><span>Sign Up with Google</span></a>
                </div>
                <div class="or">
                    <span>OR</span>
                </div> -->
                <div class="account-body">
                    <span class="d-block mb-20">Sign up with your work email</span>
                    <form method="POST" action="{{ route('register') }}" class=""> 
                            <input id="csrf" type="hidden"  name="_token" value="{{ csrf_token() }}" >
    

                                @if(Session::get('toast_type') == 'err' )

                                    <div class="alert alert-danger" >
                                        {{Session::get('toast_msg')}}
                                    </div>
                                @endif

                                @if(Session::get('toast_type') == 'suc' )

                                    <div class="alert alert-success" >
                                        {{Session::get('toast_msg')}}
                                    </div>
                                @endif


                            <div class="row">

                                <div class="col-12 ">
                                    <div class="form-group">
                                        {{-- <label for="fname">First Name</label> --}}
                                        <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror regTxtBox" name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname" autofocus placeholder="First Name">
    
                                        @error('Fname')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="form-group">
                                        {{-- <label for="Lname">Last Name</label> --}}

                                        <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus placeholder="Last Name">
    
                                        @error('Lname')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="middlename">middlename</label> --}}
                                        
                                        <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror regTxtBox" name="middlename" required autocomplete="middlename" placeholder="middlename">
    
                                        @error('middlename')
                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="username-confirm">Confirm username</label> --}}
                                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror regTxtBox" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
            
                                        @error('username')
                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="email">Email</label> --}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="password">Password</label> --}}
                                        
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="password-confirm">Confirm Password</label> --}}
                                        <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="address">address</label> --}}
                                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror regTxtBox" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address">
    
                                        @error('address')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="phone">Phone</label> --}}
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror regTxtBox" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone">
    
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="city">City</label> --}}

                                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror regTxtBox" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus placeholder="City">
    
                                        @error('city')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="state">state</label> --}}
                                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror regTxtBox" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus placeholder="state">
    
                                        @error('state')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="country">country</label> --}}

                                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror regTxtBox" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="country">
    
                                        @error('country')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="zip_code">zip code</label> --}}
                                        <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror regTxtBox" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus placeholder="zip code">
    
                                        @error('zip_code')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="routing_number">routing number</label> --}}

                                        <input id="routing_number" type="text" class="form-control @error('routing_number') is-invalid @enderror regTxtBox" name="routing_number" value="{{ old('routing_number') }}" required autocomplete="routing_number" autofocus placeholder="routing number">
    
                                        @error('routing_number')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokr">NOK Relationship</label> --}}
                                        <input id="nokr" type="text" class="form-control @error('nokr') is-invalid @enderror regTxtBox" name="nokr" value="{{ old('nokr') }}" required autocomplete="nokr" autofocus placeholder="NOK Relationship">
    
                                        @error('nokr')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokfn">NOK Firstname</label> --}}

                                        <input id="nokfn" type="text" class="form-control @error('nokfn') is-invalid @enderror regTxtBox" name="nokfn" value="{{ old('nokfn') }}" required autocomplete="nokfn" autofocus placeholder="NOK Firstname">
    
                                        @error('nokfn')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokr">NOK Relationship</label> --}}
                                        <input id="nokr" type="text" class="form-control @error('nokr') is-invalid @enderror regTxtBox" name="nokr" value="{{ old('nokr') }}" required autocomplete="nokr" autofocus placeholder="NOK Relationship">
    
                                        @error('nokr')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokfn">NOK Firstname</label> --}}

                                        <input id="nokfn" type="text" class="form-control @error('nokfn') is-invalid @enderror regTxtBox" name="nokfn" value="{{ old('nokfn') }}" required autocomplete="nokfn" autofocus placeholder="NOK Firstname">
    
                                        @error('nokfn')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokln">NOK Lastname</label> --}}
                                        <input id="nokln" type="text" class="form-control @error('nokln') is-invalid @enderror regTxtBox" name="nokln" value="{{ old('nokln') }}" required autocomplete="nokln" autofocus placeholder="NOK Lastname">
    
                                        @error('nokln')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokmn">NOK Middlename</label> --}}

                                        <input id="nokmn" type="text" class="form-control @error('nokmn') is-invalid @enderror regTxtBox" name="nokmn" value="{{ old('nokmn') }}" required autocomplete="nokmn" autofocus placeholder="NOK Middlename">
    
                                        @error('nokmn')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="nokp">NOK Phone</label> --}}
                                        <input id="nokp" type="text" class="form-control @error('nokp') is-invalid @enderror regTxtBox" name="nokp" value="{{ old('nokp') }}" required autocomplete="nokp" autofocus placeholder="NOK Phone">
    
                                        @error('nokp')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <label for="noka">NOK Address</label> --}}

                                        <input id="noka" type="text" class="form-control @error('noka') is-invalid @enderror regTxtBox" name="noka" value="{{ old('noka') }}" required autocomplete="noka" autofocus placeholder="NOK Address">
    
                                        @error('noka')
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
    
                            <?php
                                $usn = App\User::where('username', Session::get('ref'))->get();
                            ?>
    
                            <div class="row">
                                <div class="">
                                    <input id="ref" type="hidden" class="form-control" name="ref" value="@if(count($usn) > 0){{Session::get('ref')}}@endif" >
                                </div>
                            </div>
    
                            
                            <span class="sign-in-recovery">Already have an account? 
                                <a style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="/login">
                                    {{ __('Sign In') }}
                                </a>
                            </span>

                            <div class="btn-area">

                                @if($settings->user_reg == 1)
                                    <button type="submit" class="sign-in button-1" style="margin-top:30px">
                                        {{ __('Register') }}
                                    </button>
                                @else
                                    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Registration Locked.</div>
                                @endif
                                
                            </div>
                        </form>
                </div>
            </div>

            
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->

@endsection