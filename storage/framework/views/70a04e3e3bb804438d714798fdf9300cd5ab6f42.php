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
                  <div class="card-title"> Transfer To othe banks</div>
                </div>

                <div class="card-body pb-0">                 
                    <?php if(Session::has('err_send')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('err_send')); ?>

                        </div>
                        <?php echo e(Session::forget('err_send')); ?>

                    <?php endif; ?>
                    <div class="">                        
                        <form action="/user/send/fund_out" method="post" enctype="multipart/form-data">
                          <div class="form-group" align="left">                       
                              <input type="hidden" class="regTxtBox" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                              <button class="collb btn btn-info"><?php echo e(__('Transfer')); ?></button>
                          </div>
                                        
                          <div class="form-group" id="authorize_group" align="">
                            <br><br>
                            <button type="button" id="authorize" class="collb btn btn-info" onclick="send_otp('/user/wallet/wd/otp')"><?php echo e(__('Authorize')); ?></button>
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
                    <?php echo $__env->make('user.inc.transfer_out', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/send_money_out.blade.php ENDPATH**/ ?>