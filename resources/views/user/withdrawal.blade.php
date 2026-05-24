@include('user.inc.fetch')
@extends('layouts.atlantis.layout')
@Section('content')
        <div class="main-panel">
            <div class="content">
                @php($breadcome = 'Withdrawal')
                @include('user.atlantis.main_bar')
                <div class="page-inner mt--5">
                    {{-- @include('user.atlantis.overview') --}}
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                

                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title col-sm-12"  >{{ __('Withdrawal History') }} 
                                            <span class="float-right"><a id="wd_bal" title="Click to withdraw" href="javascript:void(0)"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Witdraw</a></span>
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">                                        
                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>                                                   
                                                    <th>{{ __('Date') }}</th> 
                                                    <th>{{ __('From') }}</th>
                                                    <th>{{ __('To') }}</th>
                                                    <th>{{ __('Amount') }}<th>
                                                    <th>{{ __('Status') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $activities = App\withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
                                                ?>
                                                @if(count($activities) > 0 )
                                                    @foreach($activities as $activity)
                                                        <tr>
                                                            <td>{{$activity->created_at}}</td>
                                                            <td>{{$activity->package}}</td>
                                                            <td>{{$activity->account}}</td>
                                                            <td>{{$settings->currency.' '.$activity->amount}}</td>
                                                            <td>{{$activity->status}}</td>
                                                                                 
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div id="wallet_wd" class="container popmsgContainer" >
              <div class="row padding_per_2_2">
                <div class="col-md-4">&emps;</div>
                <div class="col-md-4 popmsg-mobile card" align="Center">        
                  <div class="card-title">
                    <br>
                    <h3><b>{{ __('Crypto Wallet Withdrawal') }}</b></h3>
                    <h5 class="text-danger"><b>{{ __('Available Balance:') }}</b></h5> 
                                <h3 class="fw-bold">{{$settings->currency}} {{ number_format($user->wallet, 2) }}</h3>
          
                    <hr>
                  </div>
                  <div class="card-body">
                      {{ __('Enter amount and select bank/wallet below') }}
                      <form id="wd_formssss" action="/user/wallet/wd" method="post">
                          <div class="form-group" align="left">                       
                              <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg">{{$settings->currency}}</span>
                              </div>                        
                              <input id="wd_amt" type="text" class="form-control" name="amt"  required placeholder="Enter Amount to withdraw" >
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group" >                   
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg"><i class="fa fa-home" ></i></span>
                              </div>
                              <select name="bank" class="form-control" required>
                                  <?php 
                                    $banks = App\banks::where('user_id', $user->id)->get();
                                  ?>
                                    @if(count($banks) > 0)
                                        @foreach($banks as $bank)
                                            <option>{{$bank->Account_name.' '.$bank->Account_number.' '.$bank->Bank_Name}}</option>
                                        @endforeach
                                    @endif
          
                              </select>


                            </div>
                          </div>

                        <div class="form-group" id="form_otp" style="display:none">
                          <div class="input-group">
                            <div class="input-group-prepend " >
                              <span class="input-group-text span_bg"><i class="fa fa-key" ></i></span>
                            </div>                        
                            <input id="wd_otp" type="number" class="form-control" name="otp"  required placeholder="Enter OTP to authorize" >
                          </div>
                          <p style="margin: 0px">An otp has been sent your email, did not get email? <b style="color:#043622; cursor:pointer" onclick="send_otp('/user/wallet/wd/otp')">resend</b></p>
                        </div>

                          <div class="form-group" id="form_btns" style="display:none">
                            <br><br>
                              <button class="collb btn btn-info">{{ __('Withdraw') }}</button>
                              <span style="">            
                                <a id="wallet_wd_close" href="javascript:void(0)" class="collcc btn btn-danger">{{ __('Cancel') }}</a>        
                              </span>
                              <br>
                          </div>
                      </form>

                      <div class="form-group">
                        <button id="authorize" class="collb btn btn-info" onclick="send_otp('/user/wallet/wd/otp')">{{ __('Authorize') }}</button>
                        <span style="">            
                          <a id="wallet_wd_close2" href="javascript:void(0)" class="collcc btn btn-danger">{{ __('Cancel') }}</a>        
                        </span>
                      </div>
                  </div>  
                  <!-- close btn -->
                  <script type="text/javascript">
                    $('#wallet_wd_close').click( function(){
                      $('#wallet_wd').hide();
                    }); 
                    
                    $('#wallet_wd_close2').click( function(){
                      $('#wallet_wd').hide();
                    }); 
                    
                    $('#authorize').click( function(){
                      $('#form_btns').show();
                      $('#form_otp').show();
                      $('#authorize').hide();
                    });  
                  </script>
                  <!-- end close btn -->
                </div>
          
              </div>
            </div>

            @include('user.inc.confirm_inv')

@endSection
            