<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
        <div class="main-panel">
            <div class="content">
                <?php ($breadcome = 'Wallet'); ?>
                <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="page-inner mt--5">
                    
                    <div id="prnt"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title"><?php echo e(__('Deposit into your wallet')); ?></div>                                        
                                    </div>
                                </div>
                                <div class="card-body"> 
                                        <?php if($user->status == 2 || $user->status == 'Blocked'): ?>
                                            <div class="alert alert-warning">
                                                <p>
                                                   <?php echo e(__('Account Blocked or restricted! Please contact support for assistance. We apologize for any inconveniency.')); ?> 
                                                </p>
                                            </div>
                                        <?php elseif(empty($user->currency)): ?>
                                            <div class="alert alert-warning">
                                                <p>
                                                    <a href="/<?php echo e($user->username); ?>/profile#userdet">
                                                        <?php echo e(__('Please, update your profile before you proceed')); ?>

                                                    </a>
                                                </p>
                                            </div>
                                        <?php else: ?>
                                            <?php if($settings->deposit == 1): ?>      
                                                <div id="pay_cont" class="row">
                                                    
                                                    

                                                    

                                                   
                                                    

                                                    

                                                    <?php if(env('COINBASE_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                    
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="fab fa-bitcoin fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay using cryptocurrency system')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a href="<?php echo e(route('coinbase.index')); ?>" class="btn btn_blue" >
                                                                    <?php echo e(__('Pay with Crypto')); ?>

                                                                </a>
                                                            </div>                                      
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>

                                                    

                                                    

                                                    <?php if(env('BANK_DEPOSIT_SWITCH') == 1): ?>
                                                    <div class="col-lg-6 mt-5">                                                                    
                                                        <div class="payment_method" align="center">
                                                            <p>
                                                                <i class="far fa-building fa-4x text-info"></i> <br>
                                                            </p>
                                                            <p>
                                                                <?php echo e(__('Pay Using Direct Crypto Transfer')); ?>

                                                            </p> 
                                                           
                                                            <div align="">
                                                                <a id="pay_with_bank_dep" href="javascript:void(0)" class="btn btn_blue" >
                                                                    <?php echo e(__('Direct Crypto Transfer')); ?>

                                                                </a>
                                                            </div> 
                                                            <div id="bank_dets" align="" class="cont_display_none">
                                                                <div class="row mt-5 border border-primary rounded">              
                                                                    <div class="col-sm-12 mb-5">
                                                                        <h3 class="color_blue_b">
                                                                            <i class="fas fa-money-check-alt color_blue_9"></i> Wallet Host / Address Type: <?php echo e(env('BANK_NAME')); ?>

                                                                        </h3>
                                                                        
                                                                        <h5 class="">Address: <?php echo e(env('ACCOUNT_NAME')); ?></h5>
                                                                    </div>

                                                                    <div class="col-sm-12 mb-5">
                                                                        <h3 class="color_blue_b">
                                                                            <i class="fas fa-money-check-alt color_blue_9"></i> Wallet Host / Address Type: <?php echo e(env('BANK_NAME2')); ?>

                                                                        </h3>
                                                                        
                                                                        <h5 class="">Address: <?php echo e(env('ACCOUNT_NAME2')); ?></h5>
                                                                    </div>

                                                                    <div class="col-sm-12 mb-5">
                                                                        <h3 class="color_blue_b">
                                                                            <i class="fas fa-money-check-alt color_blue_9"></i> Wallet Host / Address Type: <?php echo e(env('BANK_NAME3')); ?>

                                                                        </h3>
                                                                        
                                                                        <h5 class="">Address: <?php echo e(env('ACCOUNT_NAME3')); ?></h5>
                                                                    </div>

                                                                    <div class="col-sm-12 mb-5">
                                                                        <h3 class="color_blue_b">
                                                                            <i class="fas fa-money-check-alt color_blue_9"></i> Wallet Host / Address Type: <?php echo e(env('BANK_NAME4')); ?>

                                                                        </h3>
                                                                        
                                                                        <h5 class="">Address: <?php echo e(env('ACCOUNT_NAME4')); ?></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row">              
                                                                    <div class="col-sm-12">
                                                                        <p class="text-danger">
                                                                           <?php echo e(__('Make payment to any of the above wallet address and click continue below.')); ?> 
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">              
                                                                    <div class="col-sm-12">
                                                                        <a id="bank_deposit_cont" href="javascript:void(0)" class="btn btn_blue" >
                                                                            <?php echo e(__('Continue')); ?>

                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>                                                                                               
                                                        </div>                                                       
                                                    </div>
                                                    <?php endif; ?>


                                                </div>                                                   
                                            <?php else: ?>
                                                <div class="col-lg-6 mt-5">                                                                    
                                                    <div class="payment_method" align="center">
                                                        <p>
                                                            <i class="far fa-building fa-4x text-info"></i> <br>
                                                        </p>
                                                        <p>
                                                            <?php echo e(__('Pay Using Direct Crypto Transfer')); ?>

                                                        </p> 
                                                    
                                                        <div align="">
                                                            <a id="pay_with_bank_dep" href="javascript:void(0)" class="btn btn_blue" >
                                                                <?php echo e(__('Direct Crypto Transfer')); ?>

                                                            </a>
                                                        </div> 
                                                        <div id="bank_dets" align="" class="cont_display_none">
                                                            <div class="row mt-5 border border-primary rounded">              
                                                                <div class="col-sm-12">
                                                                    <h3 class="color_blue_b">
                                                                        <i class="fas fa-money-check-alt color_blue_9"></i> Wallet Host: <?php echo e(env('BANK_NAME')); ?>

                                                                    </h3>
                                                                    
                                                                    <h5 class="">Address: <?php echo e(env('ACCOUNT_NAME')); ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="row">              
                                                                <div class="col-sm-12">
                                                                    <p class="text-danger">
                                                                    <?php echo e(__('Make payment to the above wallet address and click continue below.')); ?> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">              
                                                                <div class="col-sm-12">
                                                                    <a id="bank_deposit_cont" href="javascript:void(0)" class="btn btn_blue" >
                                                                        <?php echo e(__('Continue')); ?>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>                                                                                               
                                                    </div>                                                       
                                                </div>  
                                            <?php endif; ?>                                         

                                        <?php endif; ?>

                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo e(__('Deposit History')); ?></div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php
                                        $deps = App\deposits::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
                                    ?>                                                   
                                                
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>  
                                                <th><?php echo e(__('Amount')); ?></th>        
                                                <th><?php echo e(__('Method')); ?></th>
                                                <th><?php echo e(__('Account')); ?></th>
                                                <th><?php echo e(__('Acc Name')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Url')); ?></th>                                                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(count($deps) > 0 ): ?>
                                                <?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr> 
                                                        <td><?php echo e($settings->currency); ?> <?php echo e($dep->amount); ?></td>     
                                                        <!-- <td><?php echo e($dep->bank); ?></td> -->
                                                        <td><?php echo e(__('Crypto')); ?></td> 
                                                        <td>
                                                           <?php echo e($dep->account_no); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($dep->account_name); ?>

                                                        </td>
                                                        <td><?php echo e($dep->created_at); ?></td>
                                                        <td>
                                                            <?php if($dep->status == 0): ?>
                                                                Pending
                                                            <?php elseif($dep->status == 1): ?>
                                                                Approved
                                                            <?php elseif($dep->status == 2): ?>
                                                                Rejected
                                                            <?php endif; ?>
                                                        </td> 
                                                        <td>
                                                            <?php if($dep->bank == 'BTC'): ?>
                                                                <?php if($dep->account_name == 'Coin Base'): ?>
                                                                    <a href="<?php echo e(route('coinbase.confirm', ['id' => $dep->pop])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php else: ?>
                                                                    <a href="<?php echo e(route('btc.confirm', ['id' => $dep->account_name])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>                                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>                                                            
                                                    <td colspan="6"><?php echo e(__('No data')); ?></td>                                        
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <?php echo e($deps->links()); ?>

                                    </div>           
                                    <br><br>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="dep_pop" class="container dep_pop">
                <div class="row pad_5p2p">
                    <div class="col-md-4">&emps;</div>
                    <div class="col-md-4 pop_cont" align="Center">   
                        <div class="">                        
                                <span>            
                                  <a id="dep_pop_close" href="javascript:void(0)" class="btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                            <div>
                                <img id="img_pop" src="" class="pop_img_h">
                            </div>
                            <br>
                        </div>  
                        <!-- close btn -->
                        <script type="text/javascript">
                          $('#dep_pop_close').click( function(){
                            $('#dep_pop').hide();
                          });        
                        </script>
                        <!-- end close btn -->
                    </div>
                </div>
            </div>

            <div id="bank_deposit_cont_dets" class="container popmsgContainer" >
                <div class="row">
                  <div class="col-md-4">&emps;</div>
                  <div class="col-md-4 popmsg-mobile card" align="Center">        
                    <div class="mt-2">
                      <h3><b><?php echo e(__('Wallet Deposit Details')); ?></b></h3>                              
                      <hr>
                    </div>
                    <div class="">                        
                        <form action="/user/wallet/bank_deposit" method="post">
                            <div class="form-group" align="left">                       
                                <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"> <i class="fas fa-money-check-alt"></i> </span>
                                </div>                        
                                <input type="number" class="form-control" name="amt"  required placeholder="Enter Amount Transfered" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fa fa-book" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="account_name"  required placeholder="address sent from" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend " >
                                  <span class="input-group-text span_bg"><i class="fas fa-money-check-alt" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="account_no"  required placeholder="coin/token name sent" >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group" >                   
                                <div class="input-group-prepend" >
                                  <span class="input-group-text span_bg"><i class="fas fa-money-check-alt" ></i></span>
                                </div>
                                <input type="text" class="form-control" name="bank_name"  required placeholder="Wallet Host sent from" >
                              </div>
                            </div>
                            <div class="form-group">
                              <br>
                                <button class="collb btn btn-info"><?php echo e(__('Proceed')); ?></button>
                                <span style="">            
                                  <a id="bank_deposit_cont_dets_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                        </form>
                    </div>  
                    <!-- close btn -->
                    <script type="text/javascript">
                      $('#bank_deposit_cont_dets_close').click( function(){
                        $('#bank_deposit_cont_dets').hide();
                      });        
                    </script>
                    <!-- end close btn -->
                  </div>

                </div>
            </div>            
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oodlbkoj/triveinvestments.com/resources/views/user/load_wallet.blade.php ENDPATH**/ ?>