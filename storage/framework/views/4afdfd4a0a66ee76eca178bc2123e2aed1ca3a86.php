            <table class="display table table-stripped table-hover">
                <thead>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Amount Payable')); ?> </th>
                        <th> <?php echo e(__('Bank Details/Wallet')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>
                        <th> <?php echo e(__('Status')); ?> </th>                                                                              
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th> <?php echo e(__('Actions')); ?> </th>
                        <th> <?php echo e(__('Username')); ?> </th>
                        <th> <?php echo e(__('Amount')); ?> </th>                        
                        <th> <?php echo e(__('Amount Payable')); ?> </th>
                        <th> <?php echo e(__('Bank Details/Wallet')); ?> </th>
                        <th> <?php echo e(__('Date')); ?> </th>
                        <th> <?php echo e(__('Status')); ?> </th>                                                                              
                    </tr>
                </tfoot>
                <tbody>
                    
                    <?php if(count($wd) > 0 ): ?>
                        <?php $__currentLoopData = $wd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                                                            
                                <td>
                                    <a title="Reject" href="/admin/reject/user/wd/<?php echo e($dep->id); ?>" > 
                                        <span class=""><i class="fa fa-ban text-warning" ></i></span>
                                    </a>                                    
                                    <?php if($adm->role == 3): ?>
                                        <a title="Approve" href="/admin/approve/user/wd/<?php echo e($dep->id); ?>" > 
                                            <span><i class="fa fa-check text-success"></i></span>
                                        </a>
                                        <a title="Delete" href="/admin/delete/user/wd/<?php echo e($dep->id); ?>" > 
                                            <span class=""><i class="fa fa-times text-danger"></i></span>
                                        </a>

                                        <a id="wid_date_modal" data-value=<?php echo e($dep->id); ?> title="Edit Withdrawal" href="javascript:void(0)" >
                                            <span class=""><i class="fa fa-edit text-info"></i></span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($dep->usn); ?></td>
                                <td><?php echo e($dep->currency); ?> <?php echo e($dep->amount); ?></td>                                
                                <td><b><?php echo e($dep->currency); ?> <?php echo e($dep->recieving); ?></b></td>     
                                <td><?php echo e($dep->account); ?></td>
                                <td><?php echo e(substr($dep->created_at, 0, 10)); ?></td>
                                <td><?php echo e($dep->status); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo e($wd->links()); ?>


            <div id="wid_change_date" class="container popmsgContainer" >
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
                        <form id="wid_txn_form" action="" method="post">
                            <div class="form-group" align="left">                       
                                <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend " >
                                  <span class="fa-fa-phone input-group-text span_bg"></span>
                                </div>                        
                                <input id="txn_date" type="date" class="form-control" name="wid_txn_date" required placeholder="Enter new date" >
                              </div>
                            </div>
                            <div class="form-group">
                              <br><br>
                                <button class="collb btn btn-info"><?php echo e(__('Update')); ?></button>
                                <span style="">            
                                  <a id="wid_change_date_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                                </span>
                                <br>
                            </div>
                        </form>
                    </div>  
                    <!-- close btn -->
                    <script type="text/javascript">
                      $('#wid_change_date_close').click( function(){
                        $('#wid_change_date').hide();
                      });        
                    </script>
                    <!-- end close btn -->
                  </div>
            
                </div>
            </div>
            <?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/admin/temp/user_withdrawal.blade.php ENDPATH**/ ?>