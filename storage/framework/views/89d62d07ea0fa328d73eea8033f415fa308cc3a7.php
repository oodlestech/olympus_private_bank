<section class="py-24 bg-#eee">
  <div class="container">
    
    <div class="row align-items-center">
      <?php                
          $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
      ?>
      <?php if($user->phone != ''): ?>
          <?php if(isset($invs) && count($invs) > 0): ?>
              <?php $__currentLoopData = $invs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
              <div class="col-12 col-lg-4 mb-12 mb-lg-0 p-20">
                  <div class="p-12 mw-md mx-auto bg-dark" style="margin-bottom:20px; padding: 20px; background-color: #598FFA !important;">
                    <div class="d-flex mb-12 align-items-end justify-content-between" style="margin-bottom: 20px;">
                      <h2 class="text-white mb-0 lh-sm font-heading" ><?php echo e($inv->package_name); ?> <?php echo e(__('')); ?></h2>
                    </div>
                    <ul class="list-unstyled mb-10" style="color:#eee">
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span><?php echo e(__('Period of Investment')); ?> <?php echo e($inv->period); ?> <?php echo e(__('Days')); ?></span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span><?php echo e(__('Min Investment')); ?> <?php echo e($settings->currency); ?> <?php echo e($inv->min); ?></span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span><?php echo e(__('Max Investment')); ?> <?php echo e($settings->currency); ?> <?php echo e($inv->max); ?></span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span><?php echo e(__('Total Interest')); ?> <?php echo e($inv->daily_interest*$inv->period*100); ?>%</span>
                      </li>
                      <li class="text-#eee lh-lg d-flex">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span><?php echo e(__(' Withdrawal Interval')); ?> <?php echo e($inv->days_interval); ?> Days</span>
                      </li>
                    </ul>
                    <div class="" style="color: #fff" align="center">
                        <p><?php echo e(__('Funds accessible after investment elapses.')); ?></p>
                    </div>
              
                    <a id="<?php echo e($inv->id); ?>" href="javascript:void(0)" class="btn btn-primary-dark text-white w-100" style="background-color: #6665D2 !important;" onclick="confirm_inv('<?php echo e($inv->id); ?>', '<?php echo e($inv->package_name); ?>', '<?php echo e($inv->period); ?>', '<?php echo e($inv->daily_interest); ?>', '<?php echo e($inv->min); ?>', '<?php echo e($inv->max); ?>', '<?php echo e($user->wallet); ?>')">
                        <?php echo e(__('Invest')); ?>

                    </a>
                  </div>
              </div>
                                                                    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
      <?php else: ?>
          <div class="alert alert-warning">
              <a href="/<?php echo e($user->username); ?>/profile#userdet"><?php echo e(__('Please, click here to update your profile before you can invest.')); ?></a>
          </div>
      <?php endif; ?>
    </div>
  </div>
</section><?php /**PATH /home/amarachi/Documents/laravel/decadetrades/resources/views/user/inc/packages.blade.php ENDPATH**/ ?>