<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($settings->site_title); ?> - <?php echo e($settings->site_descr); ?></title>

    <link rel="shortcut icon" href="/assets2/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets2/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets2/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets2/css/plugin/nice-select.css">
    <link rel="stylesheet" href="/assets2/css/plugin/slick.css">
    <link rel="stylesheet" href="/assets2/css/arafat-font.css">
    <link rel="stylesheet" href="/assets2/css/plugin/animate.css">
    <link rel="stylesheet" href="/assets2/css/style.css">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <?php echo $__env->make('inc.frontend_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('inc.frontend_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/amarachi/Documents/laravel/coinschaingroup/resources/views/inc/frontend_layout.blade.php ENDPATH**/ ?>