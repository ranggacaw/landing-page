<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Ranggacaw website is not important for several people. Contains about Rangga Cahya itself, and nothing intersting.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('assets/css/freelancer.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="assets/favicon.jpg">

	<!-- Document Title
	============================================= -->
	<title>Ranggacaw</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="border-bottom-0 no-sticky transparent-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{url('/')}}">
								<img class="logo-default pt-3" srcset="{{('assets/images/logo.png')}}, {{('assets/images/logo.png')}} 2x" src="{{('assets/images/logo.png')}}" alt="Ranggacaw Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">
							<a href="mailto:ranggacahyaw@gmail.com" class="button button-border rounded-pill">Email Us</a>
						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="demo-freelancer-about.html"><div>About me</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-freelancer-works.html"><div>Works</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-scrollto="#footer" data-easing="easeInOutExpo" data-speed="1250" data-offset="70"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-md-100 py-4 include-header" style="background: #FFF url({{asset('assets/images/hero-bg.svg')}}) repeat top center; background-size: cover;">
			<div class="slider-inner">
				<div class="vertical-middle slider-element-fade">
					<div class="container text-center py-5">
						<div class="emphasis-title mb-2">
							<h4 class="text-uppercase ls-3 fw-bolder mb-0">I'm a Freelance</h4>
							<h1>
								<span id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items="1" data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false" data-pagi="false" data-animate-in="fadeInUp">
									<div class="oc-item gradient-text gradient-red-yellow text-uppercase">Developer</div>
									<div class="oc-item gradient-text gradient-red-yellow text-uppercase">QA</div>
									<div class="oc-item gradient-text gradient-red-yellow text-uppercase">Designer</div>
									<div class="oc-item gradient-text gradient-red-yellow text-uppercase">Barista</div>
								</span>
							</h1>
						</div>
						<!-- <div class="d-flex align-items-center justify-content-center mb-5">
							<img src="demos/freelancer/images/face.svg" alt="Face" width="60">
							<span class="text-uppercase fw-bold ms-3">SemiColonWeb</span>
						</div> -->
						<div class="mx-auto"  style="max-width: 600px">
							<p class="lead fw-normal text-dark mb-5">Authoritatively expedite backward-compatible e-commerce with cross-media e-commerce. Credibly provide access to world-class action items through resource-leveling resources.</p>
							<a href="demo-freelancer-works.html" class="button button-dark button-hero h-translatey-3 tf-ts button-reveal overflow-visible bg-dark text-end"><span>View our Works</span><i class="fa-solid fa-arrow-right"></i></a>
							<a href="#" data-scrollto="#footer" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="button button-large button-light text-dark bg-transparent m-0"><i class="fa-regular fa-circle-down"></i> <u>Contact Me</u></a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap p-0">
                @yield('content')
			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0" style="background-color: #C9D6CF;">

			<div class="container">
				<div class="footer-widgets-wrap  m-0">

					<div class="row justify-content-between">

						<div class="col-md-4">
							<div class="widget">

								<h3 class="h1 mb-5">Got a Project?<br>Let's Talk!</h3>
								<span class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quisquam aspernatur vero voluptas.</span>
								<a href="mailto:ranggacahyaw@gmail.com" class="h4 text-dark mt-5 mb-4 d-block"><u>ranggacahyaw@gmail.com</u> <i class="bi-arrow-right position-relative ms-2" style="top: 3px"></i></a>
								<div>
									<a href="https://www.facebook.com/ranggacahyaw/" class="social-icon si-small text-light bg-facebook" target="_blank">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>
									<a href="http://ranggacaw.com/ytcaw" class="social-icon si-small text-light bg-youtube" target="_blank">
										<i class="fa-brands fa-youtube"></i>
										<i class="fa-brands fa-youtube"></i>
									</a>
									<a href="http://instagram.com/ranggacaw" class="social-icon si-small text-light bg-instagram" target="_blank">
										<i class="fa-brands fa-instagram"></i>
										<i class="fa-brands fa-instagram"></i>
									</a>
								</div>

							</div>
						</div>

						<div class="col-md-5">
							<h3 class="h1 mb-5">Estimate your Project?</h3>
							<div class="form-widget" data-loader="button" data-alert-type="inline">

								<div class="form-result"></div>

								<form class="row mb-0" id="landing-enquiry" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process"></div>
									<div class="col-12 form-group mb-4">
										<label>What is Your Name:</label>
										<input type="text" name="landing-enquiry-name" id="landing-enquiry-name" class="form-control border-form-control required" value="">
									</div>
									<div class="col-12 form-group mb-4">
										<label>Your Email Address Please:</label>
										<input type="email" name="landing-enquiry-email" id="landing-enquiry-email" class="form-control border-form-control required" value="">
									</div>
									<div class="col-12 form-group mb-4">
										<label>Tell more about your Project:</label>
										<textarea name="landing-enquiry-additional-requirements" id="landing-enquiry-additional-requirements" class="form-control border-form-control" cols="10" rows="3"></textarea>
									</div>
									<div class="col-12 d-none">
										<input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="">
									</div>
									<div class="col-12">
										<button type="submit" name="landing-enquiry-submit" class="button h-translatey-3 bg-dark rounded-pill"><i class="fa-solid fa-arrow-right m-0"></i></button>
									</div>

									<input type="hidden" name="prefix" value="landing-enquiry-">
								</form>
							</div>
						</div>

					</div>

				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-double-up bg-white text-dark rounded-circle shadow">
		<i class="fa-solid fa-arrow-up fs-5"></i>
	</div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/plugins.min.js')}}"></script>
	<script src="{{asset('assets/js/functions.bundle.js')}}"></script>

	<!-- Parallax Script
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

	<script>
		// Owl Carousel Scripts
		jQuery(window).on( 'load', function(){
			jQuery('#oc-services').owlCarousel({
				items: 1,
				margin: 30,
				nav: false,
				dots: true,
				smartSpeed: 400,
				responsive:{
					576: { stagePadding: 30, items: 1 },
					768: { stagePadding: 30, items: 2 },
					991: { stagePadding: 150, items: 3 },
					1200: { stagePadding: 150, items: 3}
				},
			});
		});
	</script>

</body>
</html>