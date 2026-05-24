
<?php $__env->startSection('content'); ?>


    <!-- banner-section start -->
    <section class="banner-section inner-banner blog">
        <div class="overlay">
            <div class="banner-content d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-7 col-md-10">
                            <div class="main-content">
                                <h1>Plans</h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Plans</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    
    <!-- Compare Start -->
    <div class="compare" style="margin-top:80px" id="currency">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,3408,74,4943,2,5426,5994" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Solutions Business In start -->
    <section style="margin-bottom:100px" class="solutions-business">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h5 class="sub-title">Our Packages</h5>
                            <h2 class="title">Our Packages made for you.</h2>
                            <!-- <p>Power up your business with a full-stack online bank account that fits your needs.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row cus-mar">
                    <?php echo $__env->make('user.inc.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Solutions Business In end -->



    <!-- Call to action In start -->
    <section style="margin-bottom:100px" class="call-action">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="main-content">
                            <div class="section-header text-center">
                                <h2 class="title"><span>Ready to make the leap?</span>Let us help you.</h2>
                            </div>
                            <div class="bottom-area text-center">
                              <a href="/Register" target="_blank" class="cmn-btn">Open Account</a>
                                <a href="mailto:support@coinschaingroup.io" class="cmn-btn second">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action In end -->

    

    <!-- Personalized In start -->
    <section style="margin-bottom:100px" class="personalized">
        <div class="overlay">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-6 col-xl-5 d-flex align-items-center justify-content-end">
                        <div class="img-area">
                            <img src="assets/images/personalized.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 pt-120 pb-120">
                        <div class="section-text">
                            <h3 class="title">Need a Personalized Solution?</h3>
                            <p>Get in touch with us, and we will help you to create the right one for your business or
                                personal needs.</p>
                        </div>
                        <a href="mailto:support@coinschaingroup.io" class="cmn-btn">contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Personalized In end -->


    

    <!-- Get Start In start -->
    <section class="get-start wow fadeInUp">
        <div class="overlay">
            <div class="container">
                <div class="col-12">
                    <div class="get-content">
                        <div class="section-text">
                            <h3 class="title">Ready to get started?</h3>
                            <p>It only takes a few minutes to register your FREE CoinsChainGroup account.</p>
                        </div>
                        <a href="/register" target="_blank" class="cmn-btn">Open an Account</a>
                        <img src="assets/images/get-start.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Start In end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.frontend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/coinschaingroup/resources/views//frontend/features.blade.php ENDPATH**/ ?>