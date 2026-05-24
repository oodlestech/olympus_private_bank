
<?php $__env->startSection('content'); ?>


    <!--=======Banner-Section Starts Here=======-->
    <section class="bg_img hero-section-2" data-background="/assets2/images/about/hero-bg2.jpg">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Plan</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            Plan
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hero-shape">
                <img class="wow slideInUp" src="/assets2/images/about/hero-shape1.png" alt="about" data-wow-duration="1s">
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <?php echo $__env->make('inc.plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php echo $__env->make('inc.calculator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php echo $__env->make('inc.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.frontend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/decadetrades/resources/views//frontend/features.blade.php ENDPATH**/ ?>