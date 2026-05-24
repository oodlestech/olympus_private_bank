@extends('inc.frontend2_layout')
@section('content')

  
<div class="wrapper">
		<header class="header-main" data-parallax="scroll" data-image-src="/assets2/img/bg/bg_header.png" style="background: transparent;">
			<!-- <video autoplay loop poster="/assets2/img/bg/bg_header.png">
			   <source src="/assets2/intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			</video> -->
			<div class="hamburger">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
			<div class="container">
									<div class="header-main-top">
					<div class="logo-wrap">
						<a href="/index" class="logo">
							<img src="assets2/img/logo.png" class="img-fluid logo__img" alt="">
						</a>
					</div>
					<!-- /.logo-top-wrap -->
					<div class="header-main-control">
						<div class="header-top-line">
							<div class="lang">
								<div class="chooselang">

									<div class="selected-lang">
										<span><i class="flag-icon flag-icon-us" aria-hidden="true"></i> English</span>
									</div>

									<ul class="lang-list">
										<li>
											<a href="#">
												<span><i class="flag-icon flag-icon-ru" aria-hidden="true"></i> Russian</span>
											</a>
										</li>
										<li class="disabled">
											<a href="#">
												<span><i class="flag-icon flag-icon-cn" aria-hidden="true"></i> Chinese - soon</span>
											</a>
										</li>
										<li class="disabled">
											<a href="#">
												<span><i class="flag-icon flag-icon-jp" aria-hidden="true"></i> Japanese - soon</span>
											</a>
										</li>
										<li class="disabled">
											<a href="#">
												<span><i class="flag-icon flag-icon-de" aria-hidden="true"></i> German - soon</span>
											</a>
										</li>
										<li class="disabled">
											<a href="#">
												<span><i class="flag-icon flag-icon-fr" aria-hidden="true"></i> French - soon</span>
											</a>
										</li>
										<li class="disabled">
											<a href="#">
												<span><i class="flag-icon flag-icon-es" aria-hidden="true"></i> Spanish - soon</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
                            <ul class="user-link-list">
								<li class="user-link-item">
									<a href="/login" class="user-link-item__link registration--icon">Log in</a>
								</li>
								<li class="user-link-item">
									<a href="/register" class="user-link-item__link login--icon">Create account</a>
								</li>
                            </ul>
						</div>
						<!-- /.header-top-line -->
						<nav class="main-menu">
							<ul class="main-menu__list">
								<li class="main-menu__item">
									<a href="/index" class="main-menu__link">Home</a>
								</li>
								<li class="main-menu__item">
									<a href="/about" class="main-menu__link">About</a>
								</li>
								<li class="main-menu__item">
									<a href="/affiliate" class="main-menu__link">For Investors</a>
								</li>
								
								<li class="main-menu__item">
									<a href="/features" class="main-menu__link">For partners</a>
								</li>
								
								<!----
								<li class="main-menu__item active">
									<a href="?a=partners" class="main-menu__link">For partners</a>
								</li>
								---->
								<li class="main-menu__item">
									<a href="/faq" class="main-menu__link">FAQ</a>
								</li>
								<li class="main-menu__item">
									<a href="/blog" class="main-menu__link">News</a>
								</li>
								<!----
								<li class="main-menu__item">
									<a href="?a=reviews" class="main-menu__link">Video reviews</a>
								</li>
								---->
								<li class="main-menu__item">
									<a href="/contact" class="main-menu__link">Contacts</a>
								</li>
							</ul>
							<!-- /.main-menu-list -->
						</nav>
					</div>
					<!-- /.header-main-control -->
				</div> 
				<div class="header-main-middle">
					<div class="header-bg-layer">
						<img class="header-bg-phone" src="assets2/img/bg/phone.png">
						<div class="header-bg-triangles" id="scene">
							<img class="header-bg-triangle" src="assets2/img/bg/triangles-sm.png" data-depth="0.2">
							<img class="header-bg-triangle" src="assets2/img/bg/triangles-md.png" data-depth="0.7">
							<img class="header-bg-triangle" src="assets2/img/bg/triangles-lg.png" data-depth="1.2">
							<img class="header-bg-triangle" src="assets2/img/bg/dots-sm.png" data-depth="1.5">
							<img class="header-bg-triangle" src="assets2/img/bg/dots-lg.png" data-depth="2">
						</div>
						<div class="header-bg-stars">
							<img src="assets2/img/bg/star.png">
							<img src="assets2/img/bg/star.png">
							<img src="assets2/img/bg/star.png">
							<img src="assets2/img/bg/star.png">
						</div>
					</div>
					<div class="header-main-content">
						<div class="header-bg-text">Do Not Miss</div>
						<h1 class="header-main-title">Secure investments are real <br> in our company! </h1>
						<div class="header-text-block">
							<p class="header-main-text">Our expertise helps us in effective investment management. We maximize profits while minimizing risks – thus, every investment brings income.  Just try right now and see for yourself! </p>
							<a href="/register" class="btn btn-transparent btn-start">Get Started<span></span></a>
						</div>
						<!-- /.header-text-block -->
					</div>
				</div>
				<!-- /.header-main-content -->
		
			</div>
		</header>
		<!-- /.header-main -->
		<div class="container">
			<div class="header-main-bottom">
				<div class="social-buttons head">
					<div class="social-buttons__title">Subscribe to us</div>
					<ul class="social-buttons__list">
						<li class="social-buttons__item">
	<a href="https://t.me/joinchat/" class="social-buttons__link" target="_blank"><i class="fab fa-telegram-plane"></i></a>
</li>
<li class="social-buttons__item">
	<a href="https://www.youtube.com/channel/" class="social-buttons__link" target="_blank"><i class="fab fa-youtube"></i></a>
</li>
<li class="social-buttons__item">
	<a href="https://vk.com/" class="social-buttons__link" target="_blank"><i class="fab fa-vk"></i></a>
</li>
					</ul>
				</div>
				<!-- /.social-buttons -->
			</div>
			<!-- /.header-main-bottom -->
		</div>
		<main class="main-page">
			<section class="section-page section-about--main">
				<div class="container">
					<div class="section-title-wrap align--left">
						<h2 class="section-title wow fadeInUp">About us </h2>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="about-block">
								<blockquote class="about-block-quote wow fadeInLeftBig" data-wow-delay="0.6s">
									<div class="quote-author">
										<span>Dan Morehead</span>
										<img src="assets2/img/images/photo1.png" class="img-fluid" alt="">
									</div>
									<p>“We believe in the future of cryptocurrency, because it entered the exchange markets on a strong note. Success in this sphere is assured to everyone, who gets the hang of managing risks in this sphere. ”</p>
								</blockquote>
								<p class="section-text wow fadeInUp" data-wow-delay="0.2s">bitcoin-minning.com is a hedge fund, private investment partnership. We attract investors in order to get steady income. The core of our activity is conducting financial transactions on the international exchanges, while managing risks and guaranteeing profits. </p>
								<p class="section-text wow fadeInUp" data-wow-delay="0.4s">Our team consists of experienced traders that are engaged in trading activity for more than 10 years. We created the financial portfolio with active pool of profit from the high-yielding assets. Attracting additional capital allows to extend boundaries and to move forward. With our company every investor becomes a player on professional exchange market.</p>
								<div class="about-block-button wow fadeInUp" data-wow-delay="0.6s">
									<a href="/about" class="btn btn-gradient arrow-right--icon">Read the whole story</a>
								</div>
								<!-- /.about-block-button -->
								
								
							</div>
							<!-- /.about-block -->
						</div>
						<div class="col-lg-6">
							<img src="assets2/img/bg/macbook.png" class="img-fluid about-img home wow fadeInRight" data-wow-delay="0.8s" alt="">
							
							<div class="start-video main-video wow fadeIn" data-wow-delay="2s">
								<a href="https://www.youtube.com/watch?v=Um63OQz3bjo" class="start-play popup-youtube">
									
									<span class="play-button"></span>	
								</a>			
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section-page section-graph">
				<div class="container">
					
					<div class="row">
						<div class="col-xl-7 col-lg-6">
							<div class="iphone">
								<ul>
									<li class="wow bounceIn" data-wow-delay="0.2s">
									<div class="li-icon">
										<img src="assets2/img/iphone/icon1.png">
										<img src="assets2/img/iphone/icon1-a.png">
									</div>
									Secure  investments</li>
									<li class="wow bounceIn" data-wow-delay="0.6s">
									<div class="li-icon">
										<img src="assets2/img/iphone/icon2.png">
										<img src="assets2/img/iphone/icon2-a.png">
									</div>
									Variety of investment plans</li>
									<li class="wow bounceIn" data-wow-delay="1s">
									<div class="li-icon">
										<img src="assets2/img/iphone/icon3.png">
										<img src="assets2/img/iphone/icon3-a.png">
									</div>
									Most popular payment systems</li>
									<li class="wow bounceIn" data-wow-delay="1.4s">
									<div class="li-icon">
										<img src="assets2/img/iphone/icon4.png">
										<img src="assets2/img/iphone/icon4-a.png">
									</div>
									Fast withdrawals (up to 8 hours)</li>
								</ul>
							</div>
								<!-- <img src="/assets2/img/bg/iphone.png" class="iphone"> -->
							
						</div>
						<div class="col-xl-5 col-lg-6">
							<div class="section-title-wrap align--left">
								<h2 class="section-title wow fadeInUp">Our development</h2>
							</div>
							<div class="section-graph-content">
								<p class="section-text wow fadeInLeft" data-wow-delay="0.2s">Our key success factor is our desire to constantly move forward. We learn on the regular basis, analyzing our achievements and then doing the next step in our development.  Years of hard work helps us to create impressive knowledge assets. We developed our own strategies of trading and had great practical experience in risks management.</p>
								<p class="section-text wow fadeInLeft" data-wow-delay="0.4s">Inviting investors, we know full well the level of responsibility and we are striving for transparent partnership. Our objective is long and strong cooperation that will bring the maximum possible benefit for both parties.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section-page section-invest--main">
				<div class="container">
					<div class="section-title-wrap align--center">
						<h2 class="section-title fadeInUp wow">Our investment plans</h2>
					</div>
											<form class="form-financial form--invest"><input type="hidden" name="form_id" value="16669346787609"><input type="hidden" name="form_token" value="18f2c9c5f323d21834390b0624a9469f"><input type="hidden" name="form_id" value="15344167327253"><input type="hidden" name="form_token" value="60717c1a0e16d3b76fe169cc51eb3a79">
						<div class="form-financial-top">
							<div class="plans-navigation">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="daily-tab" data-toggle="tab" href="#daily" role="tab" aria-controls="daily" aria-selected="true">MINNING PLANS</a>
									</li>
								
								</ul>
							</div>
						</div>
						<!-- /.form-financial-top -->
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="daily" role="tabpanel" aria-labelledby="home-tab">
								<div class="tariff-plans">
									
																																				 

									<div class="plan-box">
										<input type="radio" name="plan" id="pl1" checked>
										<label for="pl1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>After 1 Day</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																																																																																																																																																																																																																120
																																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">1 day</span>
															</span>
														</span>
														<span class="plan-box-item">
																																													<span class="plan-box-item__col">
																<span class="plan-box-item__title">Minimum</span>
																<span class="plan-box-item__value">20<span>usd</span></span>
															</span>
																																																																																																																																																																																																																																																																														<span class="plan-box-item__col">
																<span class="plan-box-item__title">Maximum</span>
																<span class="plan-box-item__value">50000<span>usd</span></span>
															</span>
																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title"></span>
																<span class="plan-box-item__value"></span>
															</span>
														</span>
													</span>
												
										</label>
									</div>
									
																																																															 

									<div class="plan-box">
										<input type="radio" name="plan" id="pl1" checked>
										<label for="pl1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>After 2 Days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																																																																																																																																																																																																																140
																																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">2 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																													<span class="plan-box-item__col">
																<span class="plan-box-item__title">Minimum</span>
																<span class="plan-box-item__value">100<span>usd</span></span>
															</span>
																																																																																																																																																																																																																																																																														<span class="plan-box-item__col">
																<span class="plan-box-item__title">Maximum</span>
																<span class="plan-box-item__value">10,000<span>usd</span></span>
															</span>
																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title"></span>
																<span class="plan-box-item__value"></span>
															</span>
														</span>
													</span>
													
										</label>
									</div>
									
																																																															 

									<div class="plan-box">
										<input type="radio" name="plan" id="pl1" checked>
										<label for="pl1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>After 2 Days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																																																																																																																																																																																																																200
																																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">2 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																													<span class="plan-box-item__col">
																<span class="plan-box-item__title">Minimum</span>
																<span class="plan-box-item__value">500<span>usd</span></span>
															</span>
																																																																																																																																																																																																																																																																														<span class="plan-box-item__col">
																<span class="plan-box-item__title">Maximum</span>
																<span class="plan-box-item__value">50000<span>usd</span></span>
															</span>
																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title"> </span>
																<span class="plan-box-item__value"></span>
															</span>
														</span>
													</span>
													
										</label>
									</div>
									
																																																															 

									<div class="plan-box">
										<input type="radio" name="plan" id="pl1" checked>
										<label for="pl1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>After 3 Days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																																																																																																																																																																																																																350
																																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">3 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																													<span class="plan-box-item__col">
																<span class="plan-box-item__title">Minimum</span>
																<span class="plan-box-item__value">1,000<span>usd</span></span>
															</span>
																																																																																																																																																																																																																																																																														<span class="plan-box-item__col">
																<span class="plan-box-item__title">Maximum</span>
																<span class="plan-box-item__value">100,000<span>usd</span></span>
															</span>
																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title"> </span>
																<span class="plan-box-item__value"></span>
															</span>
														</span>
													</span>
												
										</label>
									</div>
									
																																																		
																																																																																										</div>
							</div>
							<div class="tab-pane fade" id="after" role="tabpanel" aria-labelledby="profile-tab">
								<div class="tariff-plans">
																																																																																																																																																																																																																																																																																																																											<div class="plan-box vip--plan">
										<input type="radio" name="plan" id="pa1" checked>
										<label for="pa1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>VIP after 12 days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																900
																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">12 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																														<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Minimum</span>
																	<span class="plan-box-item__value">10001<span>usd</span></span>
																</span>
																<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Maximum</span>
																	<span class="plan-box-item__value">100000<span>usd</span></span>
																</span>
																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">Deposit return</span>
																<span class="plan-box-item__value">no</span>
															</span>
														</span>
													</span>
													<span class="subplan">
														<span class="subplan-title">Watch Subplans</span>
														<span class="subplan-list">
																														<span class="subplan-item">
																<span class="subplan-item__range">10001$-100000$</span>
																<span class="subplan-item__percent">900%</span>
															</span>
																													</span>
													</span>
												</span>
										</label>
									</div>
																																																																								<div class="plan-box vip--plan">
										<input type="radio" name="plan" id="pa1" checked>
										<label for="pa1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>VIP after 30 days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																2300
																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">30 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																																														<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Minimum</span>
																	<span class="plan-box-item__value">10<span>usd</span></span>
																</span>
																																																																																																																																																										<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Maximum</span>
																	<span class="plan-box-item__value">100000<span>usd</span></span>
																</span>
																																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">Deposit return</span>
																<span class="plan-box-item__value">no</span>
															</span>
														</span>
													</span>
													<span class="subplan">
														<span class="subplan-title">Watch Subplans</span>
														<span class="subplan-list">
																														<span class="subplan-item">
																<span class="subplan-item__range">10$-1000$</span>
																<span class="subplan-item__percent">420%</span>
															</span>
																														<span class="subplan-item">
																<span class="subplan-item__range">1001$-10000$</span>
																<span class="subplan-item__percent">660%</span>
															</span>
																														<span class="subplan-item">
																<span class="subplan-item__range">10001$-100000$</span>
																<span class="subplan-item__percent">2300%</span>
															</span>
																													</span>
													</span>
												</span>
										</label>
									</div>
																																																																								<div class="plan-box vip--plan">
										<input type="radio" name="plan" id="pa1" checked>
										<label for="pa1">
												<span class="plan-box__inner">
													<div class="plan-box-top">
														<div class="plan-box-top-icons">
															<span></span>
															<span></span>
															<span></span>
														</div>
														<div class="plan-box-top-graph">
															<p>VIP after 50 days</p>
														</div>
													</div>
													<!-- /.tariff-name -->
													<span class="plan-box-list">
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__percent">
																																																																																																																4650
																																<span>%</span></span>
															</span>
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">After</span>
																<span class="plan-box-item__value">50 days</span>
															</span>
														</span>
														<span class="plan-box-item">
																																																														<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Minimum</span>
																	<span class="plan-box-item__value">10<span>usd</span></span>
																</span>
																																																																																																																																																										<span class="plan-box-item__col">
																	<span class="plan-box-item__title">Maximum</span>
																	<span class="plan-box-item__value">100000<span>usd</span></span>
																</span>
																																																												</span>
														<span class="plan-box-item">
															<span class="plan-box-item__col">
																<span class="plan-box-item__title">Deposit return</span>
																<span class="plan-box-item__value">no</span>
															</span>
														</span>
													</span>
													<span class="subplan">
														<span class="subplan-title">Watch Subplans</span>
														<span class="subplan-list">
																														<span class="subplan-item">
																<span class="subplan-item__range">10$-1000$</span>
																<span class="subplan-item__percent">750%</span>
															</span>
																														<span class="subplan-item">
																<span class="subplan-item__range">1001$-10000$</span>
																<span class="subplan-item__percent">1300%</span>
															</span>
																														<span class="subplan-item">
																<span class="subplan-item__range">10001$-100000$</span>
																<span class="subplan-item__percent">4650%</span>
															</span>
																													</span>
													</span>
												</span>
										</label>
									</div>
																																												</div>
							</div>
						</div>
					</form>
					
				</div>
			</section>
			<section class="calculator-block calculator-block--main">
				<div class="container">
					<div class="section-title-wrap">
						<h2 class="section-title">Calculator</h2>
					</div>
					<script>
              
              $(function(){
	calc();

	$('#calc_plan').on('change', calc);
	$('#inv_amount').bind('change keyup', calc).on('keypress', isNumberKey);

});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode > 31 && (charCode < 45 || charCode > 57))
		return false;
	return true;
}

function calc() {

	var plan = $('#calc_plan').val();
	var amount = $('#inv_amount').val();
	var percent;

	switch (plan) {
	    
	    case '5':
			switch (true) {
				case (amount<3):
					percent = 0;
					break;
				
				case (amount<=4): 
					percent = 0;  
					break;	

case (amount<=10): 
					percent = 120;   
					break;	


case (amount<=100): 
					percent = 120; 
					break;	


			   default:
					percent = 120; 
			}
			break;



		case '1':
			switch (true) {
				case (amount<3):
					percent = 0;
					break;
				
				case (amount<=4): 
					percent = 0;  
					break;	

case (amount<=10): 
					percent = 140;   
					break;	


case (amount<=100): 
					percent = 140; 
					break;	


			   default:
					percent = 140; 
			}
			break;




		case '2':
			switch (true) {
				case (amount<10):
					percent = 0; 
					break;
				
				case (amount<=100):  
					percent = 200; 
					break;	

case (amount<=100):
					percent = 200;   
					break;	


case (amount<=1000): 
					percent = 200; 
					break;	


			   default:
					percent = 200;
			}
			break;





		case '3':
			switch (true) {
				case (amount<10):
					percent = 0;
					break;
				
				case (amount<=24):
					percent = 250; 
					break;	

case (amount<=500):
					percent = 250; 
					break;	


case (amount<=10000):
					percent = 250;    
					break;	


			   default:
					percent = 250;
			}
			break;





		case '4':
			switch (true) {
				case (amount<10):
					percent = 0;
					break;
				
				case (amount<=1000):
					percent = 300;
					break;	

case (amount<=1000):
					percent = 300;
					break;	


case (amount<=100000000):
					percent = 300;  
					break;	


			   default:
					percent = 300;
			}
			break;


			
	}

$('#assign_per').text(percent+'%');
	var total = amount*percent/100;
	$('#total_return').text('$'+total.toFixed(2));
	
	if(total <= 0){
		$('#net_profit').text('0.00');
	}else{
		$('#net_profit').text('$'+(total-amount).toFixed(2));
	}
	
	
	

}
          </script>
          
	<div class="row">
		<div class="col-xl-6">
			<div class="form-calculator__fieldset">
				<label class="form-calculator__label wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
					<span class="label-title">Invest:</span>
					
					
					<input type="number" min="10" value="100" class="form-calculator__input input-form" id="inv_amount" name="amount">
				</label>
				<label class="form-calculator__label wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
					<select name="plan" id="calc_plan" class="form-calculator__select">
																								
						<option value="1">Plan 1 - After 1 Day</option>
						
																																				
						<option value="2">Plan 2 - After 2 Days</option>
						
																																				
						<option value="3">Plan 3 - After 2 Days</option>
						
																																				
						<option value="4">Plan 4 - After 3 Days</option>
						
																																				
					
						
																							</select>
				</label>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="block-result">
			
				<div class="block-result-item wow fadeInRight" data-wow-delay="0.6s">
					<div class="block-result-item__title">profit:</div>
					<div class="block-result-item__value"><input id="assign_per" type="text" value="20       " class="form-calculator__select" readonly=""/></div>
				</div>
				<div class="block-result-item wow fadeInRight" data-wow-delay="0.9s">
					<div class="block-result-item__title">Total Return:</div>
					<div class="block-result-item__value"><input id="total_return" type="text" value="120        " class="form-calculator__select" readonly=""/></div>
				</div>
			</div>
		</div>
	</div>
				</div>
			</section>
			<div class="main-block-sections">
				<section class="section-page section-advantages-main">
					<div class="container">
						<div class="section-title-wrap align--left">
							<h2 class="section-title wow fadeInUp">Advantages</h2>
						</div>
						<div class="advantages-content">
							<div class="advantages-circle">
								<div class="advantages-circle__logo">
									<img src="assets2/img/icons/logo-advantsges.png" class="img-fluid" alt="">
								</div>
								<ul class="advantages-circle-icon-list">
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="0.2s">
										<img src="assets2/img/icons/money.png" class="img-fluid" alt="">
									</li>
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="0.4s">
										<img src="assets2/img/icons/people.png" class="img-fluid" alt="">
									</li>
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="0.6s">
										<img src="assets2/img/icons/withdraw.png" class="img-fluid" alt="">
									</li>
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="0.8s">
										<img src="assets2/img/icons/computer-processor.png" class="img-fluid" alt="">
									</li>
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="1s">
										<img src="assets2/img/icons/technology-w.png" class="img-fluid" alt="">
									</li>
									<li class="advantages-circle-icon wow zoomIn" data-wow-delay="1.2s">
										<img src="assets2/img/icons/light-bulb.png" class="img-fluid" alt="">
									</li>
								</ul>
							</div>
							<!-- /.advantages-circle -->
							<ul class="advantages-main-list">
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="0.2s">
									<h3 class="advantages-main-item__title">Maximum protection</h3>
									<p class="advantages-main-item__text">We provide security of deposits and personal information of user’s account, including DDOS-attacks protection. </p>
								</li>
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="0.4s">
									<h3 class="advantages-main-item__title">Legitimacy </h3>
									<p class="advantages-main-item__text">bitcoin-minning.com is officially registered in UK and has official certificate. </p>
								</li>
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="0.6s">
									<h3 class="advantages-main-item__title">Technical support</h3>
									<p class="advantages-main-item__text">Our technical support is available 24/7. We will answer all your questions and give advice.</p>
								</li>
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="0.8s">
									<h3 class="advantages-main-item__title">Profitable investments</h3>
									<p class="advantages-main-item__text">We work on the leading cryptocurrency exchanges and provide every investor with stable income regardless deposit amount. </p>
								</li>
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="1s">
									<h3 class="advantages-main-item__title">Wide range of tariff plans</h3>
									<p class="advantages-main-item__text">We set the range of deposits from $ 10 to $50 000 to provide our investors with opportunity to choose the most convenient plan. </p>
								</li>
								<li class="advantages-main-item wow fadeInUp" data-wow-delay="1.2s">
									<h3 class="advantages-main-item__title">Affiliate program</h3>
									<p class="advantages-main-item__text">You can get passive income by inviting new investors to our company. We set flexible refback up to 15%. </p>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section class="section-page section-affiliate-program">
					<div class="bg_map-el"></div>
					<div class="container">
						<div class="affiliate-program-content">
							<div class="row">
								<div class="col-lg-6">
									<div class="section-title-wrap align--left">
										<h2 class="section-title wow fadeInUp">Affiliate program</h2>
									</div>
									<p class="section-text wow fadeInUp" data-wow-delay="0.4s">We look not only for investors – we also look for partners! The basis of our company is mutually beneficial cooperation at all levels. We created affiliate program that is aimed at additional income. Place your link on social networks, blogs, websites and invite people to our fund. In our turn we will pay you refback for every attracted deposit. If you are active user of social networks – this program is for you.</p>
									<a href="/features" class="btn btn-gradient arrow-right--icon wow fadeInUp" data-wow-delay="0.8s">Learn more</a>
								</div>
								<div class="col-lg-6">
									<ul class="affiliate-program-data-list">
										<li class="affiliate-program-data">
											<div class="affiliate-program-data__percent">
												<span class="percent-amount">5</span>
												<span class="percent-label">%</span>
											</div>
										</li>
										<li class="affiliate-program-data">
											<div class="affiliate-program-data__icon aff1--icon wow zoomIn" data-wow-delay="0.4s"></div>
											<div class="affiliate-program-data__descr wow fadeInLeft" data-wow-delay="0.4s">Free to join</div>
										</li>
										<li class="affiliate-program-data">
											<div class="affiliate-program-data__icon aff2--icon wow zoomIn" data-wow-delay="0.6s"></div>
											<div class="affiliate-program-data__descr wow fadeInLeft" data-wow-delay="0.6s">Unlimited earnings</div>
										</li>
										<li class="affiliate-program-data">
											<div class="affiliate-program-data__icon aff3--icon wow zoomIn" data-wow-delay="0.8s"></div>
											<div class="affiliate-program-data__descr wow fadeInLeft" data-wow-delay="0.8s">Dedicated team</div>
										</li>
										<li class="affiliate-program-data">
											<div class="affiliate-program-data__icon aff4--icon wow zoomIn" data-wow-delay="1s"></div>
											<div class="affiliate-program-data__descr wow fadeInLeft" data-wow-delay="1s">Earn up to 5% commission</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /.affiliate-program-content -->

					</div>
				</section>
			</div>
			<section class="section-page section-statistic">
				<div class="container">
					<div class="section-title-wrap">
						<h2 class="section-title wow fadeInUp">Statistic</h2>
					</div>
					<div class="statistic-top">
						<div class="row">
								<div class="col-xl-4 col-lg-6">
		<div class="statistic-table-wrap wow bounceInRight" data-wow-delay="0.9s">
			<h3 class="statistic-table-title">Recent deposits</h3>
			<div class="statistic-table">
			
												<div class="statistic-table-row">
					<div class="statistic-table-cell"><span class="statistic-user-name">N/A</span></div>
					<div class="statistic-table-cell"><span class="statistic-user-amount">N/A</span></div>
					<div class="statistic-table-cell currency--cell"><div class="currency-unit pm--icon">N/A</div></div>
				</div>								 
							</div>
		</div>
		<!-- /.statistic-table-wrap -->
	</div>

								<div class="col-xl-4 col-lg-6">
		<div class="statistic-table-wrap wow bounceInRight" data-wow-delay="0.9s">
			<h3 class="statistic-table-title">Recent withdrawals</h3>
			<div class="statistic-table">
			
											<div class="statistic-table-row">
					<div class="statistic-table-cell"><span class="statistic-user-name">N/A</span></div>
					<div class="statistic-table-cell"><span class="statistic-user-amount">N/A</span></div>
					<div class="statistic-table-cell currency--cell"><div class="currency-unit pm--icon">N/A</div></div>
				</div>								 
							</div>
		</div>
		<!-- /.statistic-table-wrap -->
	</div>

								<div class="col-xl-4 col-lg-6">
		<div class="statistic-table-wrap wow bounceInRight" data-wow-delay="0.9s">
			<h3 class="statistic-table-title">Top Active Investors</h3>
			<div class="statistic-table">
											<!----<div class="statistic-table-row">
					<div class="statistic-table-cell"><span class="statistic-user-name">osman9</span></div>
					<div class="statistic-table-cell"><span class="statistic-user-date">616.80$</span></div>
				</div>---->
								 
							</div>
		</div>
		<!-- /.statistic-table-wrap -->
	</div>

						</div>
						<!-- /.row -->
					</div>

					<div class="statistic-list" id="counter">
												<div class="statistic-item">
							<div class="statistic-item__title">Invested</div>
							<div class="statistic-item__value "><span class="statistic-number counter--value" data-count="11139490.76">0</span>$</div>
						</div>
																		<div class="statistic-item">
							<div class="statistic-item__title">Paid out</div>
							<div class="statistic-item__value"><span class="statistic-number counter--value" data-count="8565999.11">0</span>$</div>
						</div>
																		<div class="statistic-item">
							<div class="statistic-item__title">Investors</div>
							<div class="statistic-item__value"><span class="statistic-number counter--value" data-count="801">0</span></div>
						</div>
																		<div class="statistic-item">
							<div class="statistic-item__title">Days in operation</div>
							<div class="statistic-item__value"><span class="statistic-number counter--value" data-count="2757">0</span></div>
						</div>
											</div>
					<!-- /.statistic-list -->
				</div>
			</section>
			<section class="section-page section-video">
				<div class="container">
					<div class="section-title-wrap">
						<h2 class="section-title wow fadeInUp">Video Reviews</h2>
					</div>

					<ul class="reviews-list slider-video">
						<li class="reviews-item">
							<a href="https://www.youtube.com/watch?v=Um63OQz3bjo" class="reviews-item__link popup-youtube">
								<img src="http://img.youtube.com/vi/NUGMXh5gd0c/maxresdefault.jpg" class="img-fluid" alt="">
								<span class="play-button">Watch video</span>
							</a>
							<div class="reviews-item__data clearfix">
								<div class="review-author">Sara</div>
								<div class="review-date">8 august 2018</div>
							</div>
						</li>
						<li class="reviews-item wow fadeInUp" data-wow-delay="0.3s">
							<a href="https://www.youtube.com/watch?v=Um63OQz3bjo" class="reviews-item__link popup-youtube">
								<img src="http://img.youtube.com/vi/TMwESg2O4Xc/maxresdefault.jpg" class="img-fluid" alt="">
								<span class="play-button">Watch video</span>
							</a>
							<div class="reviews-item__data clearfix">
								<div class="review-author">Ron</div>
								<div class="review-date">8 august 2018</div>
							</div>
						</li>
						<li class="reviews-item wow fadeInUp" data-wow-delay="0.6s">
							<a href="https://www.youtube.com/watch?v=Um63OQz3bjo" class="reviews-item__link popup-youtube">
								<img src="http://img.youtube.com/vi/9uetfiqRVKc/maxresdefault.jpg" class="img-fluid" alt="">
								<span class="play-button">Watch video</span>
							</a>
							<div class="reviews-item__data clearfix">
								<div class="review-author">Shon</div>
								<div class="review-date">8 august 2018</div>
							</div>
						</li>
					</ul>

				</div>
			</section>

			<!-- /.news-link-block -->
		</main>


@endsection
