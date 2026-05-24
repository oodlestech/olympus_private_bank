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
    <div class="account-section bg_img" data-background="" style="background-color:#00AAEF">
        <div class="container">
            <div class="account-title text-center">
                <a href="/index" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To <?php echo e($settings->site_title); ?></span></span></a>
                <a href="/index" class="logo">
                    <!-- <img src="/assets2/images/logo/footer-logo.png" alt="logo"> -->
                </a>
            </div>
            <div class="account-wrapper">
                <!-- <div class="account-header">
                    <h4 class="title">Let's get started</h4>
                    <a href="#0" class="sign-in-with"><img src="/assets2/images/icon/google.png" alt="icon"><span>Sign Up with Google</span></a>
                </div>
                <div class="or">
                    <span>OR</span>
                </div> -->
                <div class="account-body">
                    <span class="d-block mb-20">Sign up with your work email</span>
                    <form method="POST" action="<?php echo e(route('register')); ?>" class=""> 
                            <input id="csrf" type="hidden"  name="_token" value="<?php echo e(csrf_token()); ?>" >
    

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


                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input id="Fname" type="text" class="form-control <?php $__errorArgs = ['Fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="Fname" value="<?php echo e(old('Fname')); ?>" required autocomplete="Fname" autofocus placeholder="First Name">
    
                                        <?php $__errorArgs = ['Fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Lname">Last Name</label>

                                        <input id="Lname" type="text" class="form-control <?php $__errorArgs = ['Lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="Lname" value="<?php echo e(old('Lname')); ?>" required autocomplete="Lname" autofocus placeholder="Last Name">
    
                                        <?php $__errorArgs = ['Lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">
    
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert alert-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <div class="col-sm-12">
                                            <input id="username" type="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" placeholder="Username">
            
                                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert alert-danger" >
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        
                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">
    
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                                    </div>
                                </div>
                            </div>
    
    
                            <?php
                                $usn = App\User::where('username', Session::get('ref'))->get();
                            ?>
    
                            <div class="row">
                                <div class="">
                                    <input id="ref" type="hidden" class="form-control" name="ref" value="<?php if(count($usn) > 0): ?><?php echo e(Session::get('ref')); ?><?php endif; ?>" >
                                </div>
                            </div>
    
                            
                            <span class="sign-in-recovery">Already have an account? 
                                <a style="font-size:12px; font-weight:600; color:#6A35FF; padding : 5px 15px 5px 5px !important;" class="btn btn-link" href="/login">
                                    <?php echo e(__('Sign In')); ?>

                                </a>
                            </span>

                            <div class="btn-area">

                                <?php if($settings->user_reg == 1): ?>
                                    <button type="submit" class="sign-in button-1" style="margin-top:30px">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                <?php else: ?>
                                    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Registration Locked.</div>
                                <?php endif; ?>
                                
                            </div>
                        </form>
                </div>
            </div>

            
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oodlbkoj/triveinvestments.com/resources/views/auth/register.blade.php ENDPATH**/ ?>