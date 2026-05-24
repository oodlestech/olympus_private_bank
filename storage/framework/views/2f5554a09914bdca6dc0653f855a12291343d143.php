        <!--=======Offer-Section Stars Here=======-->
        <section class="offer-section padding-top padding-bottom">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="/assets2/images/balls/ball-group1.png" alt="balls">
            </div>
            <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="/assets2/images/balls/ball-group2.png" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">INVESTMENT OFFER</span>
                            <h2 class="title">OUR INVESTMENT PLANS</h2>
                            <p>
                                Decadetrades provides a straightforward and transparent mechanism to attract investments and make more profits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offer-wrapper">
                <?php                
                    $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
                ?>
                
                <?php if(isset($invs) && count($invs) > 0): ?>
                    <?php $__currentLoopData = $invs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title"><?php echo e($inv->daily_interest*$inv->period*100); ?>%</h3>
                            <span><b>Total Intrest</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="/assets2/images/offer/offer1.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$<?php echo e($inv->min); ?></span><span class="to">to</span><span class="max">$<?php echo e($inv->max); ?></span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="/assets2/images/offer/offer2.png" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle"><?php echo e($inv->period); ?> <?php echo e(__('Days')); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="/login" class="custom-button">invest now</a>
                        </div>
                    </div>
                                                                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>
            </div>
        </section>
        <!--=======Offer-Section Ends Here=======--><?php /**PATH /home/amarachi/Documents/laravel/triveinvestments/resources/views/inc/plan.blade.php ENDPATH**/ ?>