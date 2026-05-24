<?php $__env->startSection('content'); ?>
<body>

    <!-- ==========Preloader========== -->
    
    <!-- ==========Preloader========== -->

   
    <div class="account-section" style="background-color: #0F44BA;">
        <div class="container">
            <div class="account-title">
                <a href="/" class="logo">
                    <img width="80px" height="auto" src="/img/<?php echo e($settings->site_logo); ?>" alt="<?php echo e($settings->site_title); ?>">
                </a>
            </div>
            <div class="account-wrapper">
                <div class="account-body">
                    <h4 class="subtitle" style="text-align: left; padding-left:10px; margin-bottom: 20px;color:#212529;">Verify Account</h4>
                    <div>
                        <?php if(Session::has('msgType') && Session::get('msgType') == 'err'): ?>
                        
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('status')); ?>

                            </div>
                            <?php echo e(Session::forget('status')); ?>

                            <?php echo e(Session::forget('msgType')); ?>

                            
                        <?php elseif(Session::has('msgType') && Session::get('msgType') == 'suc'): ?>
                        
                            <div class="alert alert-success">
                                <?php echo e(Session::get('status')); ?>

                            </div>
                            <?php echo e(Session::forget('status')); ?>

                            <?php echo e(Session::forget('msgType')); ?>

                        <?php else: ?>
                        
                            <div class="alert alert-danger">
                                <p>
                                    <?php echo e(__('Invalid access to this page.')); ?>

                                </p>
                            </div>
                                
                        <?php endif; ?>

                        <div class="form-group row mb-0">
                            <div class="" align="center">
                                <p>
                                    <strong><a href="/login" class="collcc btn btn-warning"><?php echo e(__('Back to Login')); ?></a></strong>
                                </p>                            
                            </div>
                        </div>
                    </div>
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

<?php echo $__env->make('inc.auth_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oodlbkoj/triveinvestments.com/resources/views/auth/act_verify.blade.php ENDPATH**/ ?>