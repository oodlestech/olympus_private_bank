<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Decadetrades - Investment Platform</title>

    <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets2/css/all.min.css">
    <link rel="stylesheet" href="/assets2/css/animate.css">
    <link rel="stylesheet" href="/assets2/css/odometer.css">
    <link rel="stylesheet" href="/assets2/css/nice-select.css">
    <link rel="stylesheet" href="/assets2/css/owl.min.css">
    <link rel="stylesheet" href="/assets2/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets2/css/flaticon.css">
    <link rel="stylesheet" href="/assets2/css/main.css">

    <link rel="shortcut icon" href="/assets2/images/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="main--body">
        <!--========== Preloader ==========-->
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->

    <?php echo $__env->make('inc.frontend_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('inc.frontend_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/amarachi/Documents/laravel/decadetrades/resources/views/inc/frontend_layout.blade.php ENDPATH**/ ?>