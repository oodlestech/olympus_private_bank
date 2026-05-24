

<?php $__env->startSection('content'); ?>


    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
   
    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="/assets2/images/account-bg.jpg">
        <div class="container">
            <div class="account-title text-center">
                <a href="/index" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To <?php echo e($settings->site_title); ?></span></span></a>
                <a href="/index" class="logo">
                    <img src="/assets2/images/logo/footer-logo.png" alt="logo">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="title mb-20">Welcome To <?php echo e($settings->site_title); ?></h4>
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

                        <?php if(Session::get('toast_type') == 'err' ): ?>

                            <div class="alert alert-danger" >
                                <?php echo e(Session::get('toast_msg')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::get('toast_type') == 'suc' ): ?>

                            <div class="alert alert-success" >
                                <?php echo e(Session::get('toast_msg')); ?>

                            </div>
                        <?php endif; ?>


                        <div class="form-group">
                            <label for="sign-up"><?php echo e(__('Your Email')); ?> </label>
                            <input type="text" placeholder="Enter Your Email " id="sign-up" name="email" class=" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus >

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
                            <label for="pass"><?php echo e(__('Password')); ?></label>

                            <input id="pass" type="password" class="passInput <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

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

                            <span class="sign-in-recovery" style="padding-bottom: 0px;">Don't have an account? 
                                <a  class="btn btn-link" style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" href="/register">
                                    <?php echo e(__('Sign Up')); ?>

                                </a>
                            </span>

                            <span class="sign-in-recovery">Forgot your password? 
                                <?php if(Route::has('password.request')): ?>
                                <a style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Recover password')); ?>

                                </a>
                                <?php endif; ?>
                            </span>

                            
                        </div>
                        <div class="form-group text-center">
                            <button   type="submit" class="sign-in button-1" style="margin-top:30px">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="or">
                    <span>OR</span>
                </div>
                <div class="account-header pb-0">
                    <span class="d-block mb-30 mt-2">Sign up with your work email</span>
                    <a href="#0" class="sign-in-with"><img src="/assets2/images/icon/google.png" alt="icon"><span>Sign Up with Google</span></a>
                    <span class="d-block mt-15">Don't have an account? <a href="sign-up.html">Sign Up Here</a></span>
                </div> -->
            </div>
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->


    

    <?php $__env->stopSection(); ?>
    

<script type="text/javascript">    
    $(document).ready(function(){
        var timeout = 10000;
        var num = 10
        setInterval(function() {
            $('#csrf').val('<?php echo e(csrf_token()); ?>');
            // alert('here');
        }, timeout);
    });                                                    
</script>

<script>
    $(document).ready(function(){
        $('.preloader-inner').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
        // $('.preloader').css("display", "none");
        $('body').delay(350).css({'overflow':'visible'});
    
    }) 
</script>
<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/decadetrades/resources/views/auth/login.blade.php ENDPATH**/ ?>