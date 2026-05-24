@include('user.inc.fetch')
@extends('layouts.atlantis.layout')
@Section('content')
    <div class="main-panel">
      <div class="content">
        @php($breadcome = 'Send Fund')
        @include('user.atlantis.main_bar')
        <div class="page-inner mt--5">
          {{-- @include('user.atlantis.overview') --}}
          <div id="prnt"></div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="card">

                <div class="card-header">
                  <div class="card-title"> Transfer To othe banks</div>
                </div>

                <div class="card-body pb-0">                 
                    @if(Session::has('err_send'))
                        <div class="alert alert-danger">
                            {{Session::get('err_send')}}
                        </div>
                        {{Session::forget('err_send')}}
                    @endif
                    <div class="">                        
                        <form action="/user/send/fund_out" method="post" enctype="multipart/form-data">
                          <div class="form-group" align="left">                       
                              <input type="hidden" class="regTxtBox" name="_token" value="{{csrf_token()}}">
                          </div> 

                          <div class="input-group pad_top10">
                            <div class="input-group-prepend " >
                              <span class="input-group-text span_bg"><i class="fa fa-home"></i></span>
                            </div> 
                            <input id="bank_name" type="text" class="form-control" name="bank_name"  required placeholder="Bank name" >
                          </div>

                          <div class="input-group pad_top10" >
                            <div class="input-group-prepend" >
                              <span class="input-group-text span_bg ">#</span>
                            </div>                        
                            <input type="number" class="form-control" id="acct_no" name="acct_no"  required placeholder="Account Number" >
                          </div>

                            
                            <div class="input-group pad_top10">
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg"><i class="fa fa-user"></i></span>
                              </div> 
                              <input id="acct_name" type="text" class="form-control" name="acct_name"  required placeholder="Account name" >
                            </div>


                            <div class="input-group pad_top10">
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fa fa-flag"></i></span>
                                </div> 
                                <input id="ctry" type="text" class="form-control" name="ctry"  required placeholder="Country" >
                            </div>
                            
                            <div class="input-group pad_top10">
                              <div class="input-group-prepend" >
                                <span class="input-group-text span_bg">#</span>
                              </div>                                                     
                              <input type="text" class="form-control" name="amount"  required placeholder="Amount">
                            </div>

                            <div class="input-group pad_top10">
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fa fa-flag"></i></span>
                                </div> 
                                <input id="routing_no" type="text" class="form-control" name="routing_no"  required placeholder="Routing Number" >
                            </div>


                          <div class="" id="form_otp" style="display:none">
                            
                            <div class="input-group pad_top10">
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg"><i class="fa fa-key" ></i></span>
                              </div>                        
                              <input id="wd_otp" type="number" class="form-control" name="otp"  required placeholder="Enter OTP to authorize" >
                            </div>
                            <p style="margin: 0px">An otp has been sent your email, did not get email? <b style="color:#043622; cursor:pointer" onclick="send_otp('/user/wallet/wd/otp')">resend</b></p>
                          </div>

                          <div type="submit" class="form-group" id="form_btns" style="display:none">
                              <button class="collb btn btn-info">{{ __('Transfer') }}</button>
                          </div>
                                        
                          <div class="form-group" id="authorize_group" align="">
                            <br><br>
                            <button type="button" id="authorize" class="collb btn btn-info" onclick="send_otp('/user/wallet/wd/otp')">{{ __('Authorize') }}</button>
                              <br>
                          </div>                        
                        </form>  
                        <br><br>                    
                    </div>
                </div>
              </div>
            </div>

            <script>
              

              $('#authorize').click( function(){
                $('#form_btns').show();
                $('#form_otp').show();
                $('#authorize_group').hide();
              });  
            </script>

            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Transfer History </div>
                </div>
                <div class="card-body">
                    @include('user.inc.transfer_out')
                </div>
              </div>
            </div>
            
          </div> 

          <div class="row">
            
          </div>        
          
        </div>
      </div>

       @include('user.inc.confirm_inv')

@endSection