<table class="display table table-stripped table-hover">
    <thead>
        <tr>
            <th> <?php echo e(__('Actions')); ?> </th>
            <th> <?php echo e(__('Sender')); ?> </th>
            <th> <?php echo e(__('Amount')); ?> </th>                        
            <th> <?php echo e(__('Bank Name')); ?> </th>
            <th> <?php echo e(__('Acct Name')); ?> </th>
            <th> <?php echo e(__('Acct No')); ?> </th>                        
            <th> <?php echo e(__('Country')); ?> </th>
            <th> <?php echo e(__('Rouing No')); ?> </th>
            <th> <?php echo e(__('Date')); ?> </th>
            <th> <?php echo e(__('Status')); ?> </th>                                                                              
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th> <?php echo e(__('Actions')); ?> </th>
            <th> <?php echo e(__('Sender')); ?> </th>
            <th> <?php echo e(__('Amount')); ?> </th>                        
            <th> <?php echo e(__('Bank Name')); ?> </th>
            <th> <?php echo e(__('Acct Name')); ?> </th>
            <th> <?php echo e(__('Acct No')); ?> </th>                        
            <th> <?php echo e(__('Country')); ?> </th>
            <th> <?php echo e(__('Rouing No')); ?> </th>
            <th> <?php echo e(__('Date')); ?> </th>
            <th> <?php echo e(__('Status')); ?> </th>                                                                              
        </tr>
    </tfoot>
    <tbody>
        <?php $settings = App\site_settings::find(1); ?>

        <?php if(count($trf) > 0 ): ?>
            <?php $__currentLoopData = $trf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                                                            
                    <td>
                        <a title="Reject" href="/admin/reject/user/trf/<?php echo e($tr->id); ?>" > 
                            <span class=""><i class="fa fa-ban text-warning" ></i></span>
                        </a>                                    
                        <?php if($adm->role == 3): ?>
                            <a title="Approve" href="/admin/approve/user/trf/<?php echo e($tr->id); ?>" > 
                                <span><i class="fa fa-check text-success"></i></span>
                            </a>
                            <a title="Delete" href="/admin/delete/user/trf/<?php echo e($tr->id); ?>" > 
                                <span class=""><i class="fa fa-times text-danger"></i></span>
                            </a>

                        <?php endif; ?>
                    </td>
                    <td><?php echo e($tr->sender); ?></td>
                    <td><?php echo e($settings->currency); ?> <?php echo e($tr->amount); ?></td>                                
                    <td><b><?php echo e($tr->bank_name); ?></b></td>     
                    <td><?php echo e($tr->acct_name); ?></td>
                    <td><?php echo e($tr->acct_no); ?></td>                                
                    <td><b><?php echo e($tr->country); ?></b></td>     
                    <td><?php echo e($tr->routing_no); ?></td>
                    <td><?php echo e(substr($tr->created_at, 0, 10)); ?></td>
                    <td><?php echo e($tr->status); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($trf->links()); ?>


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
<?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/admin/temp/user_transfers.blade.php ENDPATH**/ ?>