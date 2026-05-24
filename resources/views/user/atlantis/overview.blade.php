<?php
  $totalEarning = 0;    
  $currentEarning = 0;
  $workingDays = 0;
     
  foreach($actInv as $inv)
  {
    $totalElapse = getDays(date('y-m-d'), $inv->end_date);
    if($totalElapse == 0)
    {
      $lastWD = $inv->last_wd;
      $enddate = ($inv->end_date);
      
      $getDays = getDays($lastWD, $enddate);
      $currentEarning += $getDays*$inv->interest*$inv->capital;
      
    }
    else
    {
      $sd = $inv->last_wd;
      $ed = date('Y-m-d');        
      
      $getDays = getDays($sd, $ed);
      $currentEarning += $getDays*$inv->interest*$inv->capital;
    }
  }
?>

<div class="row mt--2">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title"><h2>{{ __('Balances') }}</h2></div><hr>
				<div class="row py-3">
					<div class="col-md-6 d-flex flex-column justify-content-around">
            
						<a id="wd_bal" title="Click to withdraw" href="javascript:void(0)" >
							<div class="border_btm" style="
                position: relative;
                background-color: #0773BC;
                color: #fff;
                padding: 10px 0 0 10px;">	
                <i class="fa fa-wallet" style="position: absolute;
                top: 30px;
                right: 20px;
                font-size: 50px;
                color: #eee;">
                </i>						
								<h4 class="fw-bold text-uppercase btn-secondarys op-8">{{ __('Wallet') }}</h4>
								<h3 class="fw-bold">{{$settings->currency}} {{ number_format($user->wallet, 2) }}</h3>
								<div class="colhd margin_n10">{{ __('Click to Withdraw Fund') }}</div>	
								<br>						
							</div>
						</a>

						<div class="clearfix"><br></div>
						
            {{-- <a id="wd_ref_bal" title="Click to withdraw" href="javascript:void(0)">
							<div style="
              position: relative;
              background-color: #0773BC;
              color: #fff;
              padding: 10px 0 0 10px;">	
              <i class="fa fa-book" style="position: absolute;
              top: 30px;
              right: 20px;
              font-size: 50px;
              color: #eee;">
              </i>								
								<h4 class="fw-bold text-uppercase btn-secondarys op-8">{{ __('Referral Bonus') }}</h4>
								<h3 class="fw-bold">{{$settings->currency}} {{ number_format($user->ref_bal, 2) }}</h3>
								<div class="colhd margin_n10" >{{ __('Click to Withdraw Fund') }}</div>	
								<br>									
							</div>
						</a> --}}

            <div class="clearfix"><br></div>
					</div>

          
					<div class="col-md-6">
            {{-- <a href="#">
  						<div class="border_btm" style="
              position: relative;
              background-color: #0773BC;
              color: #fff;
              padding: 10px 0 0 10px;">	
              <i class="fas fa-hand-holding-usd" style="position: absolute;
              top: 30px;
              right: 20px;
              font-size: 50px;
              color: #eee;">
              </i>	
  							<h4 class="fw-bold text-uppercase btn-secondarys op-8">{{ __('Earning') }}</h4>
  							<h3 class="fw-bold">{{$settings->currency}} {{ number_format($currentEarning, 2) }}</h3>
  							<div class="colhd margin_n10" >&emsp;</div>	
  							<br>	
  						</div>
						</a> --}}

            <a id="wd_ref_bal" title="Click to withdraw" href="javascript:void(0)">
							<div style="
              position: relative;
              background-color: #0773BC;
              color: #fff;
              padding: 10px 0 0 10px;">	
              <i class="fa fa-book" style="position: absolute;
              top: 30px;
              right: 20px;
              font-size: 50px;
              color: #eee;">
              </i>								
								<h4 class="fw-bold text-uppercase btn-secondarys op-8">{{ __('Referral Bonus') }}</h4>
								<h3 class="fw-bold">{{$settings->currency}} {{ number_format($user->ref_bal, 2) }}</h3>
								<div class="colhd margin_n10" >{{ __('Click to Withdraw Fund') }}</div>	
								<br>									
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="col-md-6">
		<div class="card">
			{{-- <div class="card-body">
				<div class="card-title">{{ __('Overall statistics') }}</div>
				<div class="card-category"></div>
				<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-1"></div>
						<h6 class="fw-bold mt-3 mb-0">{{ __('Investments') }}</h6>
					</div>
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-2"></div>
						<h6 class="fw-bold mt-3 mb-0">{{ __('Withdrawals') }}</h6>
					</div>
					<div class="px-2 pb-2 pb-md-0 text-center">
						<div id="circles-3"></div>
						<h6 class="fw-bold mt-3 mb-0">{{ __('Affiliates') }}</h6>
					</div>
				</div>
			</div> --}}


      <div class="card-body">
        <div class="card-title"><h2>{{ __('Account Details') }}</h2></div><hr>

          {{-- <div class="chart-container"> --}}
              {{-- <div class="comment-phara">
                  <div class="comment-adminpr" align="center">
                      <a id="selectPic" href="javascript:void(0)"  >
                          @if($user->img == "")
                              <img class="avatar_img" src="/img/any.png">
                          @else
                              <img class="avatar_img" src="/img/profile/{{ $user->img }}">
                          @endif
                      </a> 

                      <form id="form_profilepic" action="/profilepic" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <input type="file" name="prPic" id="prPic" class="display_not">
                          <button class="btn btn-info">upload</button>
                      </form>
                  </div>
                  <br>
                  
              </div> --}}
              <div class="admin-comment-month" align="left" style="font-size: 16px;">
                  
                  <div align="left">Account Name:<b> {{ucfirst($user->firstname).' '.ucfirst($user->lastname)}} </b></div><hr>

                  <div align="left">Account Number:<b> {{$user->account_number}} </b></div> <hr>

                  <div align="left">Bank Name:<b> Olympus Private Bank </b></div><hr>
                  
              </div>
          {{-- </div>                                     --}}
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

<div id="ref_wd" class="container popmsgContainer" >
    <div class="row padding_per_2_2">
      <div class="col-md-4">&emps;</div>
      <div class="col-md-4 popmsg-mobile card" align="Center">        
        <div class="panel-heading" style="">
          <br>
          <h3><b>{{ __('Referral Withdrawal') }}</b></h3>
          <h5 class="text-danger"><b>{{ __('Total Earning:') }}</b> {{$settings->currency.' '.$user->ref_bal}}</h5>         
          <hr>
        </div>
        <div id="" >
              {{ __('Enter amount to withdraw and select bank below') }}
             <form id="wd_formssss" action="/user/ref/wd" method="post">
                <div class="form-group" align="left">                       
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg">{{$settings->currency}}</span>
                    </div>                        
                    <input id="ref_amt" type="text" class="form-control" name="amt"  required placeholder="Enter Amount to withdraw" >
                  </div>
                </div>
                 <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="input-group-text span_bg"><i class="fa fa-home"></i></span>
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
                <div class="form-group">
                  <br><br>
                    <button class="collb btn btn-info">{{ __('Withdraw') }}</button>
                    <span style="">            
                      <a id="ref_wd_close" href="javascript:void(0)" class="collcc btn btn-danger">{{ __('Cancel') }}</a>        
                    </span>
                    <br>
                </div>
            </form>
        </div> 
        <!-- close btn -->
        <script type="text/javascript">
          $('#ref_wd_close').click( function(){
            $('#ref_wd').hide();
          });        
        </script>
        <!-- end close btn -->

      </div>

    </div>
  </div>