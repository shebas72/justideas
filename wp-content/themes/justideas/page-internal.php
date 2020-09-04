<?php /* Template Name: about */ ?>
<!DOCTYPE html>
<html class="no-js vlt-is--custom-cursor" lang="en">

<head>
	<meta charset="utf-8">
	<title>JUST IDEAS</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--Favicon-->
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/fav.png">
	<!--Framework-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/framework/bootstrap.min.css">
	<!--Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/Inter/style.css">
	<!--Plugins-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/vlt-plugins.min.css">
	<!--Style-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/vlt-main.min.css">
	<!--Custom-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom.css">
</head>


<body class=" animsition">
	<!--Header-->
	<header class="vlt-header">
		<div class="vlt-navbar vlt-navbar--main vlt-navbar--fixed">
			<div class="vlt-navbar-background"></div>
			<div class="vlt-navbar-inner">
				<div class="vlt-navbar-inner--left">
					<!--Logo--><a class="vlt-navbar-logo" href="https://justideas.sa/"><img class="black" src="<?php bloginfo('template_url'); ?>/img/logo-m.png" alt="JustIdeas"><img class="white" src="<?php bloginfo('template_url'); ?>/img/logo-m.png" alt="JustIdeas"></a>
					<!--Contacts-->
					<nav class="vlt-navbar-contacts d-none d-md-block">
						<ul>
							<li><a href="tel:+79281012345">+966 11 810 8107</a></li>
							<li class="sep">/</li>
							<li><a href="mailto:info@justideas.com">info@justideas.sa</a></li>
						</ul>
					</nav>
				</div>
				<div class="vlt-navbar-inner--right">
					<div class="d-flex align-items-center">
						<!--Menu Burger--><a class="vlt-menu-burger js-offcanvas-menu-open" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
								<line x1="3" y1="12" x2="21" y2="12" />
								<line x1="3" y1="6" x2="21" y2="6" />
								<line x1="3" y1="18" x2="21" y2="18" /></svg></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--Offcanvas Menu-->
	<div class="vlt-offcanvas-menu">
		<div class="vlt-offcanvas-menu__header">
			<!--Locales-->
			<!-- <nav class="vlt-offcanvas-menu__locales"><a class="active" href="#">Eng</a><a href="#">Fra</a><a href="#">Ger</a></nav> -->
			<!--Menu Burger--><a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
					<line x1="18" y1="6" x2="6" y2="18" />
					<line x1="6" y1="6" x2="18" y2="18" /></svg></a>
		</div>
		<nav class="vlt-offcanvas-menu__navigation">
			<!--Navigation-->
			<ul class="sf-menu">
			    <li><a href="https://justideas.sa/">Home.</a></li>
                  <li><a href="https://justideas.sa/about/">About Us.</a></li>
                  <li><a href="https://justideas.sa/services">Services.</a></li>
                  <li><a href="https://justideas.sa/contact">Contact.</a></li>
			</ul>
		</nav>
		<div class="vlt-offcanvas-menu__footer">
			<!--Socials-->
			<div class="vlt-offcanvas-menu__socials">
			    <a href="#" target="_blank">Linkedin.</a></div>
			<!--Copyright-->
			<div class="vlt-offcanvas-menu__copyright">
				<p>&copy; <?php echo date("Y"); ?> Copyright.<br>All rights reserved.</p>
			</div>
		</div>
	</div>
	<!--Site Overlay-->
	<div class="vlt-site-overlay"></div>
	<!--Fixed Socials-->
	<div class="vlt-fixed-socials"><a href="#" target="_blank">Linkedin.</a></div>
	<!--Main-->
	<main class="vlt-main">
		<!--Fullpage Slider-->
		<div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="800">
			<!--Home-->
			<!--Section-->
			<div class="vlt-section pp-scrollable" data-anchor="home" data-brightness="dark" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/red-background.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<!--Particles-->
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-fade-in-left vlt-custom--1451" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/plus-dark-pattern.png); transition-duration: 1s;"></div>
							<div class="vlt-particle d-none d-xl-block vlt-fade-in-right vlt-custom--1512" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/elipse-home-slide.png); transition-duration: 1.5s; transition-delay: 300ms;"></div>
							<div class="vlt-particle vlt-custom--4124" style="background-image: url(assets/img/attachment-01.png);"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-7 offset-lg-1">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<h5 class="vlt-display-1 has-white-color">Who We Really Are?</h5>
										<div class="vlt-gap-10"></div>
										<h3 class="has-white-color">Who we are? <br><span style="color:#f3a261">A New Idea</span></h3>
										<h3 class="has-white-color">What we are? <br><span style="color:#f3a261">People Believe in Ideas</span></h3>
										<h3 class="has-white-color">What we do? <br><span style="color:#f3a261">Just Ideas but with impact</span></h3>
										
										
										<div class="vlt-gap-40"></div><a class="vlt-link has-white-color" href="#">Contact Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Services-->
			<!--Section-->
			<div class="vlt-section pp-scrollable" data-anchor="introduction" data-brightness="dark" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/color2.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<!--Particles-->
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/plus-light-pattern.png); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/elipse-light.png); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-2 offset-lg-1 d-none d-lg-block">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<!--Counter Up
										<div class="vlt-counter-up" data-ending-number="6" data-animation-speed="1000" data-delimiter=""><span class="counter" >+</span><sup>+</sup>
										</div>-->
										<div class="vlt-gap-40"></div>
										<h6 style="font-size:32px; color: #e9c366;">Proudly...<br>We Start in Saudi Arabia</h6>
									</div>
								</div>
								<div class="col-lg-8 col-md-12">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h5>We promise our ambitious clients to achieve extraordinary outcomes. <span class="has-first-color">Bold steps forward.</span></h5>
									</div>
									<div class="vlt-gap-70"></div>
									<div class="row">
										
										<div class="col-md-6">
											<!--Animated Block-->
											<div class="vlt-animated-block" style="animation-delay:400ms; animation-duration:700ms;">
												<!--Services-->
												<div class="vlt-services">
													<h2 class="vlt-services__title has-first-color" style="color:#f3a261"><a href="#">Our Mission</a>
													</h2>
													<h4 class="vlt-services__text " style="color:#000">Generating Novel & Actionable Business Ideas.
													</h4>
												</div>
											</div>
											<div class="vlt-gap-40--sm"></div>
										</div>
										<div class="col-md-6">
											<!--Animated Block-->
											<div class="vlt-animated-block" style="animation-delay:500ms; animation-duration:700ms;" >
												<!--Services-->
												<div class="vlt-services">
													<h2 class="vlt-services__title has-first-color" style="color:#f3a261"><a href="#">Our Vision</a>
													</h2>
													<h4 class="vlt-services__text " style="color:#000">
                                                  To think about past, present & plan the future with imagination & wisdom to be the destination of any business that seeks success.

                                                    </h4>
                                                    
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Experience-->
			<!--Section-->
			
			<!--Skills-->
			<!--Section-->
			<div class="vlt-section pp-scrollable" data-anchor="business" data-brightness="dark" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/color3.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<!--Particles-->
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/plus-light-pattern.png); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/elipse-light.png); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-4 offset-lg-1">
									<div class="vlt-slide-photo">
										<div class="vlt-slide-photo__inside"><img src="<?php bloginfo('template_url'); ?>/assets/img/attachment-07.jpg" width="100%" alt=""></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-bottom--small has-border-radius has-box-shadow" style="top: -50px; right: -40px; width: 100px; transition-delay: 300ms;"><img src="<?php bloginfo('template_url'); ?>/assets/img/root/parallax-particle-01.png" alt=""></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-bottom--small has-border-radius has-box-shadow" style="top: 40px; left: -30px; width: 80px; transition-delay: 600ms;"><img src="<?php bloginfo('template_url'); ?>/assets/img/root/parallax-particle-02.png" alt=""></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-left--small has-border-radius has-box-shadow" style="left: 30px; bottom: -50px; width: 100px; transition-delay: 900ms;"><img src="<?php bloginfo('template_url'); ?>/assets/img/root/parallax-particle-03.png" alt=""></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-left--small negative-z-index" style="right: -40px; bottom: -30px; width: 290px; transition-delay: 1.2s;"><img src="<?php bloginfo('template_url'); ?>/assets/img/root/plus-light-pattern.png" alt=""></div>
									</div>
									<div class="vlt-gap-100--md"></div>
								</div>
								<div class="col-lg-5 offset-lg-1">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h4>What We Offer To Your Business:</h4>
										<div class="vlt-gap-20"></div>
										<p>Every business has its problems. All problems affect in/directly the business profits</p>
										<p>Also, gaining profits does not mean that the business is running at its best. Some modifications may be needed to get the best out of your business.</p>
									</div>
									<div class="vlt-gap-50"></div>
									<!--Animated Block-->
								
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Portfolio-->

		



			<div class="vlt-section pp-scrollable" data-anchor="offers" data-brightness="dark" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/color5.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<!--Particles-->
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/plus-light-pattern.png); animation-delay: 750ms;"></div>
						
						</div>
						<div class="container">
							<div class="row align-items-center">
							<div class="col-lg-5 offset-lg-1">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h4 style="color:#ffffff;">We offer your business:</h4>
										<div class="vlt-gap-20"></div>
									<p style="color:#fff">1. New ideas about Business insights<br>
									2. New ideas for ways of operating your business <br>
									3. New ideas for growth opportunities<br>
									4. New ideas to be unique <br>
									5. Creative Problem Solving <br>
									6. And our Unique Capsules </p>

									</div>
									<div class="vlt-gap-50"></div>
									<!--Animated Block-->
								
								
								</div>
								<div class="col-lg-4 offset-lg-1">
								<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h4 style="color:#ffffff;">Our Promise is to:</h4>
										<div class="vlt-gap-20"></div>
										<p style="color:#fff">1. Increase Your Market Share<br>
									2. Increase Your Revenues <br>
									3. Increase Customers & Employees Satisfaction<br>
									4. Strengthen Your Market Position<br>
									5. Become A Market Leader <br>
									6. And, To Offer You Always New Ideas </p>

									</div>
									<div class="vlt-gap-50"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
				<div class="vlt-section pp-scrollable" data-anchor="values" data-brightness="dark" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/color4.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<!--Particles-->
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/root/plus-light-pattern.png); animation-delay: 750ms;"></div>
						
						</div>
						<div class="container">
							<div class="row align-items-center">
							<div class="col-lg-5 offset-lg-1">
								
								
								
								
								
								
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h3 style="color:#ffffff;">Values</h3>
										<p>&nbsp;</p>
											<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<!--Progress Bar-->
										<div class="vlt-progress-bar" data-final-value="100" data-animation-speed="1000">
											<h5 style="color:#ffffff;" class="vlt-progress-bar__title">1. Honesty
											</h5>
											<div class="vlt-progress-bar__bar"><span></span></div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									
										<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<!--Progress Bar-->
										<div class="vlt-progress-bar" data-final-value="100" data-animation-speed="1000">
											<h5 style="color:#ffffff;" class="vlt-progress-bar__title">2. Professionality
											</h5>
											<div class="vlt-progress-bar__bar"><span></span></div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									
										<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<!--Progress Bar-->
										<div class="vlt-progress-bar" data-final-value="100" data-animation-speed="1000">
											<h5 style="color:#ffffff;" class="vlt-progress-bar__title">3. Trust
											</h5>
											<div class="vlt-progress-bar__bar"><span></span></div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									
										<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<!--Progress Bar-->
										<div class="vlt-progress-bar" data-final-value="100" data-animation-speed="1000">
											<h5 style="color:#ffffff;" class="vlt-progress-bar__title">4. Novelty
											</h5>
											<div class="vlt-progress-bar__bar"><span></span></div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									
										<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<!--Progress Bar-->
										<div class="vlt-progress-bar" data-final-value="100" data-animation-speed="1000">
											<h5 style="color:#ffffff;" class="vlt-progress-bar__title">5. & Love…Because nothing will succeed without that magical Value
											</h5>
											<div class="vlt-progress-bar__bar"><span></span></div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									
									
								</div>
								</div>
								<div class="col-lg-4 offset-lg-1">
									<div class="vlt-slide-photo">
										<div class="vlt-slide-photo__inside"><img src="<?php bloginfo('template_url'); ?>/assets/img/attachment-08.jpg" width="100%" alt=""></div>
									
									</div>
									<div class="vlt-gap-100--md"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>


		
		
		
			<ul class="vlt-fullpage-slider-progress-bar">
				<li data-menuanchor="home"></li>
				<li data-menuanchor="introduction"></li>
				<li data-menuanchor="business"></li>
				<li data-menuanchor="offers"></li>
				<li data-menuanchor="values"></li>
				
			</ul>
			<!--Numbers-->
	
		</div>
		<!--Footer-->
		<footer class="vlt-footer vlt-footer--fixed">
			<!--Copyright-->
			<div class="vlt-footer-copyright">
				<p>&copy; <?php echo date ("Y"); ?> Copyright.<br>All rights reserved.</p>
			</div>
		</footer>
	</main>
	<!--Libs-->
	<script src="<?php bloginfo('template_url'); ?>/assets/vendors/jquery-3.5.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/scripts/vlt-plugins.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/scripts/vlt-helpers.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/scripts/vlt-controllers.min.js"></script>
</body>

</html>