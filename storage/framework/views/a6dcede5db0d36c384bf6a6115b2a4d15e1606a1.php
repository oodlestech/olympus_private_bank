<?php
    
    $actInv = App\investment::where('user_id', $user->id)->orderby('id', 'desc')->get();
    $refs = App\ref::where('username', $user->username)->orderby('id', 'desc')->get();
    // dd($refs);
    $ref_amt = 0;
    foreach($refs as $ref)
    {
       $ref_amt += $ref->amount;
    }
    $ref_bal = $ref_amt - $user->ref_bal;

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
            $workingDays = getDays($lastWD, $enddate);
            $currentEarning += $workingDays*$inv->interest*$inv->capital;
        }
        else
        {
            $sd = $inv->last_wd;
            $ed = date('Y-m-d');
            $workingDays = getDays($sd, $ed);
            $currentEarning += $workingDays*$inv->interest*$inv->capital;
        }
    }
?>


<div class="table-responsive">            
    <table id="basic-datatables" class="display table table-striped table-hover">
        <thead class="web-table">
            <tr>                
               <th> <?php echo e(__('Package')); ?> </th>
               <th> <?php echo e(__('Capital')); ?> </th>
               <th> <?php echo e(__('Return')); ?> </th>
               <th> <?php echo e(__('Date Invested')); ?> </th> 
               <th> <?php echo e(__('Elapse')); ?> </th>  
               <th> <?php echo e(__('Days Spent')); ?> </th> 
               <th> <?php echo e(__('Withdrawn')); ?> </th>  
               <th> <?php echo e(__('Status')); ?> </th>
               <th> <?php echo e(__('Earning')); ?> </th>  
               <th> <?php echo e(__('Action')); ?> </th>                                   
            </tr>
        </thead>
        
        <tbody class="web-table">
            
            <?php if(count($actInv) > 0 ): ?>
                <?php $__currentLoopData = $actInv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php

                        $totalElapse = getDays(date('y-m-d'), $in->end_date);
                        if($totalElapse == 0)
                        {
                            $lastWD = $in->last_wd;
                            $enddate = ($in->end_date);
                            $Edays = getDays($lastWD, $enddate);
                            $ern  = $Edays*$in->interest*$in->capital;
                            $withdrawable = $ern;
                                                                 
                            $totalDays = getDays($in->date_invested, $in->end_date);
                            $ended = "yes";

                        }
                        else
                        {
                            $lastWD = $in->last_wd;
                            $enddate = (date('Y-m-d'));
                            $Edays = getDays($lastWD, $enddate);
                            $ern  = $Edays*$in->interest*$in->capital;
                            $withdrawable = 0;
                            if ($Edays >= $in->days_interval)
                            {
                                $withdrawable = $in->days_interval*$in->interest*$in->capital;
                            }
                                                           
                            $totalDays = getDays($in->date_invested, date('Y-m-d'));
                            $ended = "no";
                        }

                    ?>
                    <tr class="">
                        <td><?php echo e($in->package); ?></td>
                        <td><?php echo e($in->capital); ?></td>
                        <td><?php echo e($in->i_return); ?></td>
                        <td><?php echo e($in->date_invested); ?></td>
                        <td><?php echo e($in->end_date); ?></td> 
                        <td>
                            <?php if($in->status != 'Expired'): ?>
                                <?php echo e($totalDays); ?>

                            <?php else: ?>
                                0
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($in->w_amt); ?></td> 
                        <td><?php echo e($in->status); ?></td>
                        <td><?php echo e($user->currency); ?> <?php echo e($ern); ?></td>  
                        <td>

                            <!-- Button trigger modal -->
                            <a title="Edit" href="javascript:void(0)" class="btn btn-info" onclick="editEarn('<?php echo e($in->capital); ?>', '<?php echo e($ern); ?>')">
                                <i class="fas fa-edit"></i>
                            </a>

                        </td>           
                    </tr>
                    
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                
            <?php endif; ?>
        </tbody>
    </table>

    
</div>
    
<div class="mobile_table container messages-scrollbar" >
            <?php if(count($actInv) > 0 ): ?>
                <?php $__currentLoopData = $actInv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php

                        $totalElapse = getDays(date('y-m-d'), $inv->end_date);
                        if($totalElapse == 0)
                        {
                            $lastWD = $in->last_wd;
                            $enddate = ($in->end_date);
                            $Edays = getDays($lastWD, $enddate);
                            $ern  = $Edays*$in->interest*$in->capital;
                            $withdrawable = $ern;
                                                                 
                            $totalDays = getDays($in->date_invested, $in->end_date);
                            $ended = "yes";

                        }
                        else
                        {
                            $lastWD = $in->last_wd;
                            $enddate = (date('Y-m-d'));
                            $Edays = getDays($lastWD, $enddate);
                            $ern  = $Edays*$in->interest*$in->capital;
                            $withdrawable = 0;
                            if ($Edays >= $in->days_interval)
                            {
                                $withdrawable = $in->days_interval*$in->interest*$in->capital;
                            }
                                                           
                            $totalDays = getDays($in->date_invested, date('Y-m-d'));
                            $ended = "no";
                        }

                    ?>
                        
                    <div class="alert alert-info margin_top_10 pad_top_0 font_14" >
                        <div class="row admin_usr_inv_row" >
                            <div class="col-xs-12 pad_top_5" align="center" >
                                <h4 class="u_case"> <?php echo e(__('Pakage:')); ?>  <?php echo e($in->package); ?></h4>
                               
                            </div>
                        </div> 
                        <div class="row color_blue_9">
                            <div class="col-xs-6">
                                <?php echo e(__('Capital:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->capital); ?>

                            </div>
                        </div> 
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Return:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->i_return); ?>

                            </div>
                        </div>  
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Started:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->date_invested); ?>

                            </div>
                        </div> 
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Ending:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->end_date); ?>

                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Days:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($totalDays); ?>

                            </div>
                        </div>
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Withdrawn:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->w_amt); ?>

                            </div>
                        </div> 
                        <div class="row" style="">
                            <div class="col-xs-6">
                                <?php echo e(__('Status:')); ?> 
                            </div>
                            <div class="col-xs-6">
                                <?php echo e($in->status); ?>

                            </div>
                        </div> 
                        <div class="row" style="">
                            <br>
                            <div class="col-xs-12" align="center">
                                <!-- Button trigger modal -->
                                <a title="Edit" href="javascript:void(0)" class="btn btn-info" onclick="editEarn('<?php echo e($in->capital); ?>', '<?php echo e($ern); ?>')">
                                    <i class="fas fa-edit"></i>
                                </a>

                            </div>
                        </div>                                                                     
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                
            <?php endif; ?>
</div>



                                        
    <div id="editEarning" class="container popmsgContainer" >
        <div class="row padding_per_2_2">
            <div class="col-md-4">&emps;</div>
            <div class="col-md-4 popmsg-mobile card" align="Center">        
            <div class="card-title">
                <br>
                <h3><b><?php echo e(__('Edit Earning')); ?></b></h3>
                <h3>Enter a new intrest rate</h3>
                <p class="fw-bold">Capital: $ <span id="invPack"></span> </p>
                <p class="fw-bold">Earning: $ <span id="currEarn"></span> </p>
                <hr>
            </div>
            <div class="card-body">


                <form id="" action="/earning/<?php echo e($in->id); ?>" method="post">
                    <?php echo method_field("PUT"); ?>
                    <div class="form-group" align="left">                       
                        <input type="hidden" class="form-control" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-prepend " >
                            <span class="input-group-text span_bg">$</span>
                        </div>                        
                        <input id="" type="text" class="form-control" name="earnings" required placeholder="New Intrest Rate" >
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br>
                        <button class="collb btn btn-info"><?php echo e(__("Edit")); ?></button>
                        <span style="">            
                            <a id="earn_close" href="javascript:void(0)" class="collcc btn btn-danger"><?php echo e(__('Cancel')); ?></a>        
                        </span>
                        <br>
                    </div>
                </form>

            </div>  
            <!-- close btn -->
            <script type="text/javascript">
                $('#earn_close').click( function(){
                $("#editEarning").hide();
                });        
            </script>
            <!-- end close btn -->
            </div>
    
        </div>
    </div>
<?php /**PATH /home/amarachi/Documents/laravel/triveinvestments/resources/views/admin/temp/user_inv.blade.php ENDPATH**/ ?>