<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Withdrawal'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                

                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title col-sm-12"  ><?php echo e(__('Withdrawal History')); ?> 
                                            <span class="float-right"><a id="wd_bal" title="Click to withdraw" href="javascript:void(0)"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Witdraw</a></span>
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">                                        
                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>                                                   
                                                    <th><?php echo e(__('Date')); ?></th> 
                                                    <th><?php echo e(__('From')); ?></th>
                                                    <th><?php echo e(__('To')); ?></th>
                                                    <th><?php echo e(__('Amount')); ?><th>
                                                    <th><?php echo e(__('Status')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $activities = App\withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
                                                ?>
                                                <?php if(count($activities) > 0 ): ?>
                                                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($activity->created_at); ?></td>
                                                            <td><?php echo e($activity->package); ?></td>
                                                            <td><?php echo e($activity->account); ?></td>
                                                            <td><?php echo e($settings->currency.' '.$activity->amount); ?></td>
                                                            <td><?php echo e($activity->status); ?></td>
                                                                                 
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    
                                                <?php endif; ?>
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
                    <h3><b><?php echo e(__('Crypto Wallet Withdrawal')); ?></b></h3>
                    <h5 class="text-danger"><b><?php echo e(__('Available Balance:')); ?></b></h5> 
                                <h3 class="fw-bold"><?php echo e($settings->currency); ?> <?php echo e(number_format($user->wallet, 2)); ?></h3>
          
                    <hr>
                  </div>
                  <div class="card-body">
                      <?php echo e(__('Enter amount and select bank/wallet below')); ?>

                      <form id="wd_formssss" action="/user/wallet/wd" method="post">
                          <div class="form-group" align="left">                       
                              <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend " >
                                <span class="input-group-text span_bg"><?php echo e($settings->currency); ?></span>
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
                                    <?php if(count($banks) > 0): ?>
                                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option><?php echo e($bank->Account_name.' '.$bank->Account_number.' '.$bank->Bank_Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
          
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
                              <button class="collb btn btn-info"><?php echo e(__('Withdraw')); ?></button>
                              <span style="">            
                                <a id="wallet_wd_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                              </span>
                              <br>
                          </div>
                      </form>

                      <div class="form-group">
                        <button id="authorize" class="collb btn btn-info" onclick="send_otp('/user/wallet/wd/otp')"><?php echo e(__('Authorize')); ?></button>
                        <span style="">            
                          <a id="wallet_wd_close2" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
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

            <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/withdrawal.blade.php ENDPATH**/ ?>