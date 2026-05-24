<?php
    $trans = App\fund_transfer_out::where('userid',$user->id)->orderby('id','desc')->get();
?>
<div class="table-responsive"><table id="basic-datatables" class="display table table-striped table-hover" >
        <thead>
            <tr>                
                <th>Receiver</th>                
                <th>Bank</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>                                                    
            </tr>
        </thead>
        <tbody>
            
            <?php if(count($trans) > 0 ): ?>
                <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <!-- <td></td> -->
                        <td><?php echo e($activity->acct_name); ?></td>
                        <td><?php echo e($activity->bank_name); ?></td>
                        <td><?php echo e($settings->currency.' '.$activity->amount); ?></td>
                        <td><?php echo e($activity->status); ?></td>    
                        <td><?php echo e($activity->created_at); ?></td> 
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                
            <?php endif; ?>
        </tbody>
    </table>
</div>
       <?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/inc/transfer_out.blade.php ENDPATH**/ ?>