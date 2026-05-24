
            <table class="display table table-stripped table-hover" >
                <thead>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Acct Name/TXN ID')); ?> </th>
                        <th> <?php echo e(__('Acct No/Wallet')); ?> </th>
                        <th> <?php echo e(__('Method')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>                        
                        <th> <?php echo e(__('Status')); ?> </th>                                                                                
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Acct Name/TXN ID')); ?> </th>
                        <th> <?php echo e(__('Acct No/Wallet')); ?> </th>
                        <th> <?php echo e(__('Method')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>                        
                        <th> <?php echo e(__('Status')); ?> </th>                                                                               
                    </tr>
                </tfoot>
                <tbody>
                    
                    <?php if(count($deps) > 0 ): ?>
                        <?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a title="Reject Deposit" href="/admin/reject/user/payment/<?php echo e($dep->id); ?>" > 
                                        <span class=""><i class="fa fa-ban text-warning" ></i></span>
                                    </a>                                    
                                    <?php if($adm->role == 3): ?>
                                        <a title="Approve Deposit" href="/admin/approve/user/payment/<?php echo e($dep->id); ?>" > 
                                            <span><i class="fa fa-check text-success"></i></span>
                                        </a>
                                        <a title="Delete Deposit" href="/admin/delete/user/payment/<?php echo e($dep->id); ?>" > 
                                            <span class=""><i class="fa fa-times text-danger"></i></span>
                                        </a>

                                        <a id="date_modal" data-value=<?php echo e($dep->id); ?> title="Edit Deposit" href="javascript:void(0)" >
                                            <span class=""><i class="fa fa-edit text-info"></i></span>
                                        </a>
                                    <?php endif; ?>
                                </td>                                                            
                                <td><?php echo e($dep->usn); ?></td>
                                <td><?php echo e($dep->currency); ?> <?php echo e($dep->amount); ?></td>                                
                                <td><?php echo e($dep->account_name); ?></td>
                                <td><?php echo e($dep->account_no); ?></td>
                                <td><?php echo e($dep->bank); ?></td>
                                <td><?php echo e(substr($dep->created_at, 0, 10)); ?></td>                               
                                <td>
                                    <?php if($dep->status == 0): ?>
                                        Pending
                                    <?php elseif($dep->status == 1): ?>
                                        Approved
                                    <?php elseif($dep->status == 2): ?>
                                        Rejected
                                    <?php endif; ?>
                                </td>   
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="" align="">
               <span> <?php echo e($deps->links()); ?></span>  
            </div> 
            <br><br>
        
            <div id="change_date" class="container popmsgContainer" >
                <div class="row padding_per_2_2">
                  <div class="col-md-4">&emps;</div>
                  <div class="col-md-4 popmsg-mobile card" align="Center">        
                    <div class="card-title">
                      <br>
                      <h3><b><?php echo e(__('Edit Transaction Date')); ?></b></h3>
                      <h5 class="text-danger"><b><?php echo e(__('Transaction Date:')); ?></b></h5> 
            
                      <hr>
                    </div>
                    
                    <div class="card-body">
                        <form id="txn_form" action="" method="post">
                            <div class="form-group" align="left">                       
                                <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend " >
                                  <span class="fa-fa-phone input-group-text span_bg"></span>
                                </div>                        
                                <input id="txn_date" type="date" class="form-control" name="txn_date" required placeholder="Enter new date" >
                              </div>
                            </div>
                            <div class="form-group">
                              <br><br>
                                <button class="collb btn btn-info"><?php echo e(__('Update')); ?></button>
                                <span style="">            
                                  <a id="change_date_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                        </form>
                    </div>  
                    <!-- close btn -->
                    <script type="text/javascript">
                      $('#change_date_close').click( function(){
                        $('#change_date').hide();
                      });        
                    </script>
                    <!-- end close btn -->
                  </div>
            
                </div>
            </div><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/admin/temp/user_deposits.blade.php ENDPATH**/ ?>