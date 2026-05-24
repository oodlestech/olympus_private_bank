<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
      <div class="content">
        <?php ($breadcome = 'Send Fund'); ?>
        <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-inner mt--5">
          
          <div id="prnt"></div>
          
          <div class="row">
            <div class="col-md-4">
              <div class="card">

                <div class="card-header">
                  <div class="card-title"> Transfer Within Olympus</div>
                </div>

                <div class="card-body pb-0">                 
                    <?php if(Session::has('err_send')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('err_send')); ?>

                        </div>
                        <?php echo e(Session::forget('err_send')); ?>

                    <?php endif; ?>
                    <div class="">                        
                        <form action="/user/send/fund" method="post" enctype="multipart/form-data">
                          <div class="form-group" align="left">                       
                              <input type="hidden" class="regTxtBox" name="_token" value="<?php echo e(csrf_token()); ?>">
                          </div> 

                          <div class="input-group pad_top10" >
                            <div class="input-group-prepend" >
                              <span class="input-group-text span_bg ">#</span>
                            </div>                        
                            <input type="number" class="form-control" id="account_number" name="account_number"  required placeholder="Account Number" >
                          </div>

                          <div class="" id="form_name" style="display:none">
                            
                            <div class="input-group pad_top10">
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg"><i class="fa fa-user"></i></i></span>
                              </div> 
                                                  
                              <input id="recievers_username" readonly type="hidden" class="form-control" name="recievers_username"  required placeholder="Recievers name" >

                              <input id="recievers_name" readonly type="text" class="form-control" name="recievers_name"  required placeholder="Recievers name" >
                            </div>
                            
                            <div class="input-group pad_top10">
                              <div class="input-group-prepend" >
                                <span class="input-group-text span_bg"><?php echo e($settings->currency); ?></span>
                              </div>                                                     
                              <input type="text" class="form-control" name="s_amt"  required placeholder="Enter amount you want to transfer" >
                            </div>

                            <div class="form-group" id="authorize_group" align="">
                              <br><br>
                              <button type="button" id="authorize" class="collb btn btn-info" onclick="send_otp('/user/wallet/wd/otp')"><?php echo e(__('Authorize')); ?></button>
                                <br>
                            </div> 

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
                              <button class="collb btn btn-info"><?php echo e(__('Transfer')); ?></button>
                          </div>
                                        
                          <div class="form-group" id="verify_group" align="">
                            <br><br>
                            <button type="button" id="verify" class="collb btn btn-info" ><?php echo e(__('Verify')); ?></button>
                              <br>
                          </div>                          
                        </form>  
                        <br><br>                    
                    </div>
                </div>
              </div>
            </div>

            <script>
              $('#verify').click(  function(){

                const res =  fetch_recievers_name('/user/wallet/wd/reciever');
                console.log(res);
                if (res == false) {
                  $('#err').html('Enter a valid Account Number')
                  $('#err').show().animate({ width: "30%" }, "1000").delay(2000).animate({ width: "-50px" }, "1000").fadeOut(50); 
                } else {
                  // $('#form_name').show();
                  // $('#verify_group').hide();
                }
              }); 

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
                    <?php echo $__env->make('user.inc.transfer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
              </div>
            </div>
            
          </div> 

          <div class="row">
            
          </div>        
          
        </div>
      </div>

       <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/send_money.blade.php ENDPATH**/ ?>