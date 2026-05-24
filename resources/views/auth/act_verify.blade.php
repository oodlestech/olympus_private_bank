
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

   
    <div class="account-section" style="background-color: #0F44BA;">
        <div class="container">
            <div class="account-title">
                <a href="/" class="logo">
                    <img width="80px" height="auto" src="/img/{{$settings->site_logo}}" alt="{{$settings->site_title}}">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Verify Account</h4>
                    <div>
                        @if(Session::has('msgType') && Session::get('msgType') == 'err')
                        
                            <div class="alert alert-danger">
                                {{Session::get('status')}}
                            </div>
                            {{Session::forget('status')}}
                            {{Session::forget('msgType')}}
                            
                        @elseif(Session::has('msgType') && Session::get('msgType') == 'suc')
                        
                            <div class="alert alert-success">
                                {{Session::get('status')}}
                            </div>
                            {{Session::forget('status')}}
                            {{Session::forget('msgType')}}
                        @else
                        
                            <div class="alert alert-danger">
                                <p>
                                    {{ __('Invalid access to this page.') }}
                                </p>
                            </div>
                                
                        @endif

                        <div class="form-group row mb-0">
                            <div class="" align="center">
                                <p>
                                    <strong><a href="/login" class="collcc btn btn-warning">{{ __('Back to Login') }}</a></strong>
                                </p>                            
                            </div>
                        </div>
                    </div>
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
