<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e($settings->site_title); ?> - <?php echo e($settings->site_descr); ?></title>
    <meta name="description" content="<?php echo e($settings->site_descr); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/<?php echo e($settings->site_logo); ?>" type="image/x-icon"/>

    <!--=== Reset Css ===-->
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <!--=== Bootstrap ===-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--=== Fontawesome icon ===-->
    <link rel="stylesheet" href="/assets/css/font-awesome-5.10.2.min.css">
    <!--=== Owl-Carousel ===-->
    <link rel="stylesheet" href="/assets/css/plugin/owl.carousel.min.css">
    <!--=== Magnific Popup===-->
    <link rel="stylesheet" href="/assets/css/plugin/magnific-popup.css">
    <!--=== Nice select Popup===-->
    <link rel="stylesheet" href="/assets/css/plugin/nice-select.css">
    <!--=== Animation Css ===-->
    <link rel="stylesheet" href="/assets/css/plugin/animate.css">
    <!--=== Main Css ===-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--=== Responsive Css ===-->
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>


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
 
    
<?php echo $__env->make('inc.frontend_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('inc.frontend_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--====== Scroll To Top Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top End ======-->

<!--==================================================================-->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/proper-min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--=== All Plugin ===-->
<script src="assets/js/plugin/waypoint.min.js"></script>
<script src="assets/js/plugin/owl.carousel.min.js"></script>
<script src="assets/js/plugin/jquery.rcounter.js"></script>
<script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugin/jquery.nice-select.min.js"></script>
<script src="assets/js/plugin/wow.min.js"></script> 

<!--=== All Active ===-->
<script src="assets/js/main.js"></script>

<!-- Sweet Alert -->
<script src="/atlantis/js/plugin/sweetalert/sweetalert.min.js"></script>


</body>

</html>

<?php /**PATH C:\Users\OWNER\Documents\laravel\LotusProtocol\resources\views/inc/frontend_layout.blade.php ENDPATH**/ ?>