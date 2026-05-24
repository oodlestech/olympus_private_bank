<?php $__env->startSection('content'); ?>
<body>

    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

   
    <div class="account-section" style="background-image: url('/img/account-bg.jpg');">
        <div class="container">
            <div class="account-title">
                <a href="/" class="back-home"><i class="fas fa-angle-left"></i>Home</a>
                <a href="#0" class="logo">
                    <img width="80px" height="auto" src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;">Welcome To <?php echo e($settings->site_title); ?></h4>
                    <form method="POST" action="<?php echo e(route('session_sa.upload_u2s')); ?>" class=""> 
                        <?php if(Session::has('err_msg')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('err_msg')); ?>

                            </div>
                             <?php echo e(Session::forget('err_msg')); ?>

                        <?php endif; ?>

                        <?php if(Session::has('regMsg')): ?>
                            <div class="alert alert-success" >
                                <?php echo e(Session::get('regMsg')); ?>

                            </div>
                             <?php echo e(Session::forget('regMsg')); ?>

                        <?php endif; ?>

                        <div class="form-group" > 
                            
                            <input id="email" type="email" class=" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Your Email">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    <?php echo e($message); ?>

                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="form-group">
                            
                                <input id="password" type="password" class=" <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="password" required autocomplete="current-password" placeholder="Your Password">

                                

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert alert-danger" >
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                        </div>

                        <div class="row" style="padding-left:25px; text-align: left;">                                                    
                            
                            <label style="text-align: left;" class="sign-in-recovery">Forgot your password? 
                                
                                <?php if(Route::has('password.request')): ?>
                                <a style="font-size:12px; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Recover password')); ?>

                                </a>
                                <?php endif; ?>

                            </label>
                                                                                    
                        </div>


                        <div class="form-group" style="text-align: left;">                                                    
                            
                            <input class="" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            &nbsp;
                            <label class="" for="remember">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                                                                                    
                        </div>

                        <div class="form-group text-center" style="text-align:left;">
                            
                                <button type="submit" class="sign-in button-1">
                                    <?php echo e(__('Login')); ?>

                                </button>                               
                           
                        </div>

                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2"><?php echo e(__("Don't have an account?")); ?> <a style="font-size:12px; color:#6A35FF;" href="/register"><?php echo e(__('Sign Up Here')); ?></a>                             
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

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OWNER\Documents\laravel\LotusProtocol\resources\views/auth/login.blade.php ENDPATH**/ ?>