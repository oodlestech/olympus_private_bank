
<div class="card card-sales" style="padding:20px; margin-bottom:20px; box-shadow: 2px 2px 9px 2px;">
    <h6 class="slim-card-title tx-success" style="font-weight: 900; font-size:14px;">
        <?php echo e($in->package); ?> / <span class="breadcrumb-item active" aria-current="page"><?php echo e($in->period); ?> Day(s)</span>
        <span class="breadcrumb-item active" aria-current="page"><?php echo e(($settings->currency)); ?> <?php echo e($in->capital); ?></span>
    </h6>

    <div style="width: 100%;" class="mg-t-10">
        
        <?php if($in->status == 'Active'): ?>
            <p class="mg-b-10" style="width: 50%; float:left;">
                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span><?php echo e($in->status); ?> 
            </p>
            <p class="float-right" style="width: 50%; float:right; text-align:right">Day <?php echo e($totalDays); ?></p>
        <?php else: ?>
            <p class="mg-b-10" style="width: 50%; float:left;">
                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span><?php echo e($in->status); ?> 
            </p>
            <p class="float-right" style="width: 50%; float:right; text-align:right">Stopped</p>
        <?php endif; ?>

        
                                        
    </div> 

    
    
    <div style="width: 100%; font-weight:900;" class="mg-t-10">
        <p class="float-left" style="width: 50%; float:left; margin-bottom:0px; font-weight:900">START DATE</p>
        <p class="float-right" style="width: 50%; float:right; text-align:right; margin-bottom:0px; font-weight:900">END DATE</p>
    </div>
    <div style="width: 100%;">
        <p class="float-left" style="width: 50%; float:left;"><?php echo e($in->date_invested); ?></p>
        <p class="float-right" style="width: 50%; float:right; text-align:right;"><?php echo e($in->end_date); ?></p>
    </div>

    <div class="row">
        <div class="col" style="margin-bottom:0px">
            <label class="tx-12">Total to earn</label>
            <p><?php echo e(($settings->currency)); ?> <?php echo e($in->i_return); ?></p>
        </div><!-- col -->
        
        <div class="col" style="border-left: 2px dotted #555; border-right: 2px dotted #555; margin-bottom:0px">
            <label class="tx-12">Current Earning</label>
            <p><?php echo e($settings->currency); ?> <?php echo e($ern); ?></p>
        </div><!-- col -->
        
        <div class="col" style="margin-bottom:0px">
            <label class="tx-12">Total Unstaked</label>
            <p><?php echo e(($settings->currency)); ?> <?php echo e($in->w_amt); ?></p>
        </div><!-- col -->
    </div><!-- row -->

    <a class="btn btn-secondary" style="margin-top:20px" title="Withdraw" href="javascript:void(0)" class="btn btn-info" onclick="wd('pack', '<?php echo e($in->id); ?>', '<?php echo e($ern); ?>', '<?php echo e($withdrawable); ?>', '<?php echo e($Edays); ?>', '<?php echo e($ended); ?>')">
        Take Profit
    </a>
                     
</div><?php /**PATH /home/oodlbkoj/triveinvestments.com/resources/views/user/inc/mob_inv.blade.php ENDPATH**/ ?>