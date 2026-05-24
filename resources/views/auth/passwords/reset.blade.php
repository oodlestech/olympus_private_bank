@extends('inc.auth_layout')
@section('content')
<body>

    <!-- ==========Preloader========== -->
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ==========Preloader========== -->

   
    <!-- <div class="account-section" style="background-color: #598FFA;"> -->
    <div class="account-section bg_img" data-background="/assets2/images/account-bg.jpg">
        <div class="container">
            <div class="account-title">
                {{-- <a href="/" class="back-home"><i class="fas fa-angle-left"></i>Home</a> --}}
                <a href="/" class="logo">
                    <img width="80px" height="auto" src="/img/{{$settings->site_logo}}" alt="{{$settings->site_title}}">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Password Reset</h4>

                    @if(Session::has('msgType') && Session::get('msgType') == 'err')                                
                        <div class="alert alert-danger">
                            {{Session::get('status')}}
                        </div>
                        {{Session::forget('msgType')}}
                        {{Session::forget('status')}}
                            
                    @endif
                
                    @if(Session::has('pwd_rst_suc'))
                        <div class="alert alert-success">
                            {{Session::get('status')}}
                        </div>
                        {{Session::forget('msgType')}}
                        {{Session::forget('status')}}
                        {{Session::forget('pwd_rst_suc')}}
                        
                    @elseif(Session::has('pwd_reset_err'))
                        <div class="alert alert-danger">
                            {{Session::get('pwd_reset_err')}}
                        </div>
                        {{Session::forget('pwd_reset_err')}}
                        <br><br><br>
                    @else
                    @endif
                    <form method="POST" action="/user/update/pwd">
                        @csrf                                    
                            <div class="form-group row">
                                    <div class="col-md-12">
                                    <label for="password" class=" col-form-label text-md-right">{{ __('New Password') }}</label>
                                    <input id="password" type="password" class="regTxtBox @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="regTxtBox" name="c_pwd" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-grouptext-center" style="text-align:left;">
                                    <button type="submit" class="sign-in button-1">
                                        {{ __('Reset') }}
                                    </button>
                                <br><br>
                            </div>
                        
                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2">{{ __("Remembered your password?") }} <a style="font-size:12px; font-weight:600; color:#6A35FF;" href="/login">{{ __('Back to Login') }}</a>                             
                    </label>                                                   
                    
                </div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top End ======-->


@endsection
