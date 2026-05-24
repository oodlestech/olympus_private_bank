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
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Password Reset</h4>

                    <?php if(Session::has('msgType') && Session::get('msgType') == 'err'): ?>                                
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('status')); ?>

                        </div>
                        <?php echo e(Session::forget('msgType')); ?>

                        <?php echo e(Session::forget('status')); ?>

                            
                    <?php endif; ?>
                
                    <?php if(Session::has('pwd_rst_suc')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('status')); ?>

                        </div>
                        <?php echo e(Session::forget('msgType')); ?>

                        <?php echo e(Session::forget('status')); ?>

                        <?php echo e(Session::forget('pwd_rst_suc')); ?>

                        
                    <?php elseif(Session::has('pwd_reset_err')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('pwd_reset_err')); ?>

                        </div>
                        <?php echo e(Session::forget('pwd_reset_err')); ?>

                        <br><br><br>
                    <?php else: ?>
                    <?php endif; ?>
                    <form method="POST" action="/user/update/pwd">
                        <?php echo csrf_field(); ?>                                    
                            <div class="form-group row">
                                    <div class="col-md-12">
                                    <label for="password" class=" col-form-label text-md-right"><?php echo e(__('New Password')); ?></label>
                                    <input id="password" type="password" class="regTxtBox <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                    <?php $__errorArgs = ['password'];
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
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password-confirm" class=" col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
                                    <input id="password-confirm" type="password" class="regTxtBox" name="c_pwd" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-grouptext-center" style="text-align:left;">
                                    <button type="submit" class="sign-in button-1">
                                        <?php echo e(__('Reset')); ?>

                                    </button>
                                <br><br>
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

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oodlbkoj/triveinvestments.com/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>