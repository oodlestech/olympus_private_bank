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
                <a href="/" class="back-home"><i class="fas fa-angle-left"></i>Back</a>
                <a href="#0" class="logo">
                    <img width="100px" height="auto" src="/assets/img/footer-logo.png" alt="<?php echo e($settings->site_title); ?>">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;">Let's get started</h4>
                    <form method="POST" action="<?php echo e(route('register')); ?>" class=""> 
                        <input id="csrf" type="hidden"  name="_token" value="<?php echo e(csrf_token()); ?>" >

                        <div class="form-group row" > 
                            <div class="col-sm-6">
                                <input id="Fname" type="text" class=" <?php $__errorArgs = ['Fname'];
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
                             <div class="col-sm-6">
                                <input id="Lname" type="text" class=" <?php $__errorArgs = ['Lname'];
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
                        
                        <div class="form-group row"> 
                                                    
                            <div class="col-sm-12">
                                  <input id="email" type="email" class=" <?php $__errorArgs = ['email'];
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

                        <div class="form-group row">

                            <div class="col-sm-12">
                               <input id="username" type="username" class=" <?php $__errorArgs = ['username'];
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

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input id="password" type="password" class=" <?php $__errorArgs = ['password'];
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
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class=" regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                            </div>

                        </div>


                        <?php
                            $usn = App\User::where('username', Session::get('ref'))->get();
                        ?>

                        <div class="row">
                            <div class="">
                                <input id="ref" type="hidden" class="" name="ref" value="<?php if(count($usn) > 0): ?><?php echo e(Session::get('ref')); ?><?php endif; ?>" >
                            </div>
                        </div>

                        

                        <div class="form-group text-center" style="text-align:left;">
                                <br><br>
                                <?php if($settings->user_reg == 1): ?>
                                    <button type="submit" class="sign-in button-1">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                <?php else: ?>
                                    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Registration Locked.</div>
                                <?php endif; ?>
                                <br><br>                              
                           
                        </div>

                    </form>
                </div>

                <div class="account-header" style="text-align: left;">
                    <label class="d-block span-2"><?php echo e(__("Already have an account?")); ?> <a style="font-size:12px; color:#6A35FF;" href="/login"><?php echo e(__('Login')); ?></a>                             
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

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OWNER\Documents\laravel\LotusProtocol\resources\views/auth/register.blade.php ENDPATH**/ ?>