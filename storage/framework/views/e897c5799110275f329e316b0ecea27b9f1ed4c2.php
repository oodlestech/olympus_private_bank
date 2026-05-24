<?php $__env->startSection('content'); ?>


    
<main class="main-page">
			<section class="section-page">
				<div class="container">
					<div class="section-title-wrap">
						<h1 class="section-title wow fadeInUp">Contacts</h1>
					</div>

					<div class="support-top">
						<div class="support-contact-list">
							<div class="support-contact-item address--item wow fadeInRight" data-wow-delay="0.2s">
								<div class="support-contact-item__inner">
									<div class="support-contact-item__icon"><span class="icon-inner-gradient address--icon"></span></div>
									<div class="support-contact-item__title">Address:</div>
									<div class="support-contact-item__value">12 Felix Road, Easton Business Centre, Bristol, Avon, United Kingdom, BS5 0HE</div>
								</div>
							</div>
							<div class="support-contact-item wow fadeInRight" data-wow-delay="0.4s">
								<a href="#" class="support-contact-item__link">
									<div class="support-contact-item__icon"><span class="icon-inner-gradient email--icon"></span></div>
									<div class="support-contact-item__title">E-mail:</div>
									<div class="support-contact-item__value"><a href="mailto:support@olympuspbpro.com" class="support-item__link"><span class="__cf_email__" >support Email</span></a></div>
								</a>
							</div>
							<!-- <div class="support-contact-item wow fadeInRight" data-wow-delay="0.6s">
								<a href="#" class="support-contact-item__link">
									<div class="support-contact-item__icon"><span class="icon-inner-gradient email--icon"></span></div>
									<div class="support-contact-item__title">E-mail:</div>
									<div class="support-contact-item__value"><a href="cdn-cgi/l/email-protection.html#69080d040007290b001d0a060007440400070700070e470a0604"><span class="__cf_email__" data-cfemail="b9d8ddd4d0d7f9dbd0cddad6d0d794d4d0d7d7d0d7de97dad6d4">[email&#160;protected]</span></a></div>
								</a>
							</div> -->
						</div>
					</div>

					<div class="support-bottom">
						<div class="row">
							<div class="col-lg-5">

                                
                             

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>

								<form method=post name=mainform onsubmit="return checkform()" class="form-support"><input type="hidden" name="form_id" value="16669347108795"><input type="hidden" name="form_token" value="a837494f1d66e2a8441804dd6889b283">
							 
                                    <input type=hidden name=a value=support>
                                    <input type=hidden name=action value=send>

                                    				   
				   <label class="form-support__label label--icon wow fadeInLeft" data-wow-delay="0.2s">
										<span class="form-input-icon user--icon"></span>
                                                                                    <input class="form-support__input input-form input--icon" type="text" name="name" placeholder="Your name" value="">
                                        
                                    </label>
									<label class="form-support__label label--icon wow fadeInLeft" data-wow-delay="0.4s">
										<span class="form-input-icon email--icon"></span>
                                                                                    <input class="form-support__input input-form input--icon" type="email" name="email" value="" placeholder="Your email">
                   
				   </label>
				   
				                  
                                    									<label class="form-support__label label--textarea wow fadeInLeft" data-wow-delay="0.8s">
										<span class="form-input-icon line--icon"></span>
										<textarea class="form-support__textarea input-form input--icon" name=message placeholder="Message"></textarea>
									</label>

									<div class="form-support__button wow fadeInLeft" data-wow-delay="1s">
										<button type="submit" class="btn btn-gradient"><span>Send</span></button>
									</div>
								</form>                                
                            </div>
							<div class="col-lg-7">
								<div class="support-right-side">
									<ul class="support-text-list" style="margin-top: 50px;">
										<li class="support-text-item wow fadeInUp" data-wow-delay="0.2s">
											<h3 class="support-text-item__title">Contact Us</h3>
											<p class="support-text-item__text">Use the feedback form to ask a question. Our technical support will answer you in the nearest future.</p>
										</li>
										<li class="support-text-item wow fadeInUp" data-wow-delay="0.4s">
											<h3 class="support-text-item__title">We will solve all your problems</h3>
											<p class="support-text-item__text">You can contact technical support by e-mail. In any case, the letter will not go unnoticed, and you will receive an answer.</p>
										</li>
									</ul>
									<div class="map wow fadeInUp" data-wow-delay="0.8s">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.785019082079!2d-2.56981703405827!3d51.462103421834954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718e4114962831%3A0xee682de0a8c47bd!2zRWFzdG9uIEJ1c2luZXNzIENlbnRyZSwgRmVsaXggUmQsIEJyaXN0b2wgQlM1IDBIRSwg0JLQtdC70LjQutC-0LHRgNC40YLQsNC90LjRjw!5e0!3m2!1sru!2slv!4v1523962962370" allowfullscreen></iframe>
									</div>
									<!-- /.map -->
								</div>
								<!-- /.support-right-side -->
							</div>
						</div>
					</div>
					<!-- /.support-bottom -->

				</div>
			</section>
		</main>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.frontend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/amarachi/Documents/laravel/triveinvestments/resources/views//frontend/contact.blade.php ENDPATH**/ ?>