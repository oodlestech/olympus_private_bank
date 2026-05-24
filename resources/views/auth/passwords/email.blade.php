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
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Password Recovery</h4>

                    @if(Session::has('msgType') && Session::get('msgType') == 'err')                                
                        <div class="alert alert-danger">
                            {{Session::get('status')}}
                        </div>
                        {{Session::forget('msgType')}}
                        {{Session::forget('status')}}

                    @elseif(Session::has('msgType') && Session::get('msgType') == 'suc')
                    
                        <div class="alert alert-success">
                            {{Session::get('status')}}
                        </div>
                        {{Session::forget('msgType')}}
                        {{Session::forget('status')}}                                
                    @else
                    @endif
                    <form method="POST" action="/user/request/change/pwd">
                        
                        @csrf
                        <div class="form-group row">
                            <label for="email">{{ __('Email Address') }}</label>                                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group text-center" style="text-align:left;">
                            <button type="submit" class="sign-in button-1">
                                {{ __('Reset') }}
                            </button>
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
