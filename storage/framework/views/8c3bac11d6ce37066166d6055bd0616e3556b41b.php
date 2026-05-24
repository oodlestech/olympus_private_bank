

<?php $__env->startSection('content'); ?>
   
   
<!-- Login In start -->
    <section class="sign-in-up login">
        <div class="overlay pt-120 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content" style="padding-bottom:0">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Enter Your Password</h2>
                                <p>Your security is our top priority. You'll need this to log into your <?php echo e($settings->site_title); ?> account</p>
                            </div>



                            <form method="POST" action="<?php echo e(route('session_sa.upload_u2s')); ?>" class=""> 
                                <div class="row">
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

                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email"><?php echo e(__('Your Email')); ?></label>
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
                                    </div>

                                    <div class="col-12">
                                        <div class="single-input ">
                                            <label for="password"><?php echo e(__('Password')); ?></label>
                                            <div class="password-show d-flex align-items-center">

                                                <input id="password" type="password" class="passInput <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="password" required autocomplete="current-password" placeholder="Your Password">

                                                <img class="showPass" src="/assets2/images/icon/show-hide.png" alt="icon">

                                                <!-- <div class="forgot-area text-end">
                                                    <?php if(Route::has('password.request')): ?>
                                                        <a class="forgot-password" href="<?php echo e(route('password.request')); ?>">
                                                            <?php echo e(__('Recover password')); ?>

                                                        </a>
                                                    <?php endif; ?>
                                                </div> -->
                                            </div>
                                            
            
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
                                    </div>

                                    
                                    <div class="row" style="padding-left:25px; text-align: left;">                                                    
                                        
                                        <label style="text-align: left;" class="sign-in-recovery">Forgot your password? 
                                            
                                            <?php if(Route::has('password.request')): ?>
                                            <a style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Recover password')); ?>

                                            </a>
                                            <?php endif; ?>
            
                                        </label>
                                                                                                
                                    </div>

                                    <div class="btn-area">
                                        <button   type="submit" class="cmn-btn">
                                            <?php echo e(__('Login')); ?>

                                        </button>
                                    </div>
                                </div>
                                
        
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login In end -->

    

    <?php $__env->stopSection(); ?>
    
    <div id="err" class="alert alert-danger popup_alert_err" ></div>
    <div id="suc" class="alert alert-success popup_alert_suc"></div>

    <?php if(Session::get('toast_type') == 'err' ): ?>
        <script type="text/javascript">
            $('#err').html('<?php echo e(Session::get('toast_msg')); ?>')
            $('#err').show().animate({ width: "30%" }, "1000").delay(10000).fadeOut(100);
        </script>
    <?php endif; ?>
    <?php if(Session::get('toast_type') == 'suc' ): ?>
        <script type="text/javascript">
            $('#suc').html('<?php echo e(Session::get('toast_msg')); ?>')
            $('#suc').show().animate({ width: "30%" }, "1000").delay(10000).fadeOut(100);
        </script>
    <?php endif; ?>

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
<?php echo $__env->make('inc.frontend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/coinschaingroup/resources/views/auth/login.blade.php ENDPATH**/ ?>