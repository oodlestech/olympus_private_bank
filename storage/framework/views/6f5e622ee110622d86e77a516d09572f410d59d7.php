<?php $__env->startSection('content'); ?>
<body>

    <!-- ==========Preloader========== -->
    
    <!-- ==========Preloader========== -->

   
    <!-- <div class="account-section" style="background-color: #598FFA;"> -->
    <div class="account-section bg_img" data-background="/assets2/images/account-bg.jpg">
        <div class="container">
            <div class="account-title">
                
                <a href="/" class="logo">
                    <img width="80px" height="auto" src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Password Recovery</h4>

                    <?php if(Session::has('msgType') && Session::get('msgType') == 'err'): ?>                                
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('status')); ?>

                        </div>
                        <?php echo e(Session::forget('msgType')); ?>

                        <?php echo e(Session::forget('status')); ?>


                    <?php elseif(Session::has('msgType') && Session::get('msgType') == 'suc'): ?>
                    
                        <div class="alert alert-success">
                            <?php echo e(Session::get('status')); ?>

                        </div>
                        <?php echo e(Session::forget('msgType')); ?>

                        <?php echo e(Session::forget('status')); ?>                                
                    <?php else: ?>
                    <?php endif; ?>
                    <form method="POST" action="/user/request/change/pwd">
                        
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="email"><?php echo e(__('Email Address')); ?></label>                                        
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                        </div>

                        <div class="form-group text-center" style="text-align:left;">
                            <button type="submit" class="sign-in button-1">
                                <?php echo e(__('Reset')); ?>

                            </button>
                        </div>

                        
                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2"><?php echo e(__("Remembered your password?")); ?> <a style="font-size:12px; font-weight:600; color:#6A35FF;" href="/login"><?php echo e(__('Back to Login')); ?></a>                             
                    </label>                                                   
                    
                </div>
            </div>
        </div>
    </div>

    <!--====== Scroll To Top Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top End ======-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/decadetrades/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>