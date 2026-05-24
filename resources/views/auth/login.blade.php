
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
    <!-- /assets2/images/account-bg.jpg -->
    <div class="account-section bg_img" data-background="" style="background:linear-gradient(to right, #008855, #6386e4)">
        <div class="container">
            <div class="account-title text-center">
                {{-- <a href="../" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To {{$settings->site_title}}</span></span></a> --}}
                <a href="/index" class="logo">
                    <img width="100px" src="img/logo.png" alt="logo"> 
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To {{$settings->site_title}}</h4>
                    <form method="POST" action="{{ route('session_sa.upload_u2s') }}" class=""> 

                        @if(Session::has('err_msg'))
                            <div class="alert alert-danger">
                                {{Session::get('err_msg')}}
                            </div>
                            {{Session::forget('err_msg')}}
                        @endif

                        @if(Session::has('regMsg'))
                            <div class="alert alert-success" >
                                {{Session::get('regMsg')}}
                            </div>
                            {{Session::forget('regMsg')}}
                        @endif

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


                        <div class="form-group">
                            <label for="sign-up">{{ __('Your Email') }} </label>
                            <input type="text" placeholder="Enter Your Email " id="sign-up" name="email" class=" @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                            @error('email')
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass">{{ __('Password') }}</label>

                            <input id="pass" type="password" class="passInput @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    {{ $message }}
                                </span>
                            @enderror

                            <span class="sign-in-recovery" style="padding-bottom: 0px;">Don't have an account? 
                                <a  class="btn btn-link" style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" href="/register">
                                    {{ __('Sign Up') }}
                                </a>
                            </span>

                            <span class="sign-in-recovery">Forgot your password? 
                                @if (Route::has('password.request'))
                                <a style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Recover password') }}
                                </a>
                                @endif
                            </span>

                            
                        </div>
                        <div class="form-group text-center">
                            <button   type="submit" class="sign-in button-1" style="margin-top:30px">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mb-30 mt-2">Sign up with your work email</span>
                    <a href="#0" class="sign-in-with"><img src="/assets2/images/icon/google.png" alt="icon"><span>Sign Up with Google</span></a>
                    <span class="d-block mt-15">Don't have an account? <a href="sign-up.html">Sign Up Here</a></span>
                </div> -->
            </div>
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->


    

    @endsection
    

<script type="text/javascript">    
    $(document).ready(function(){
        var timeout = 10000;
        var num = 10
        setInterval(function() {
            $('#csrf').val('{{ csrf_token() }}');
            // alert('here');
        }, timeout);
    });                                                    
</script>

<script>
    $(document).ready(function(){
        $('.preloader-inner').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
        // $('.preloader').css("display", "none");
        $('body').delay(350).css({'overflow':'visible'});
    
    }) 
</script>