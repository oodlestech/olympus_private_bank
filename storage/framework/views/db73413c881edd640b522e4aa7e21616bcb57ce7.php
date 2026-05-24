    <!-- Main-menu Strat -->
    <div class="mein-menu">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img width="70px" height="auto" src="/assets/img/logo.png" alt="<?php echo e($settings->site_title); ?>" class="logo">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a  href="/" class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" aria-current="page" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about" class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="/affiliate" class="nav-link <?php echo e(request()->is('affiliate') ? 'active' : ''); ?>"  tooltip="coming soon">Affiliate</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Pages</a> 
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="features.html">Features</a></li>
                                <li><a class="dropdown-item" href="pricing.html">pricing</a></li>
                                <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                                <li><a class="dropdown-item" href="registration.html">Registration</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item"><a href="/features" class="nav-link <?php echo e(request()->is('features') ? 'active' : ''); ?>">Features</a></li>
                        <li class="nav-item"><a href="/pricing" class="nav-link <?php echo e(request()->is('pricing') ? 'active' : ''); ?>">pricing</a></li>
                        <li class="nav-item"><a href="/faq" class="nav-link <?php echo e(request()->is('faq') ? 'active' : ''); ?>">Faq</a></li>
                        
                        <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="/register" class="nav-link">Registration</a></li>


                        <!-- <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li> -->
                        <li class="nav-item">
                            <div class="language-select">
                                <select class="select-bar">
                                    <option value="">EN</option>
                                    <option value="">IN</option>
                                    <option value="">BN</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button-1" href="/register" style="color:#fff">Start Now !</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Main-menu End --><?php /**PATH C:\Users\OWNER\Documents\laravel\LotusProtocol\resources\views/inc/frontend_nav.blade.php ENDPATH**/ ?>