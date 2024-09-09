<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Bezhoe Infotek Indonesia">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/components/ion.rangeslider.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('assets/css/hosting.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	@stack('styles')

	<!-- Document Title
	============================================= -->
	<title>Bezhoe Infotek</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="text-center dark" style="background-color: #1d1d74">
			<p class="mb-0 text-white" style="font-size: 14px;">From concept to deployment, we design and build custom software that solves complex problems and meets your unique needs<a href="#" class="ms-2 font-primary fw-bold text-white"><u>Contact Us</u> &#8250;</a></p>
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html">
								<img class="logo-default" srcset="{{asset('assets/images/bezhoe/bz-logo.png')}}, {{asset('assets/images/bezhoe/bz-logo.png')}} 2x" src="{{asset('assets/images/bezhoe/bz-logo.png')}}" alt="Bezhoe Logo">
								<img class="logo-dark" srcset="{{asset('assets/images/bezhoe/bz-logo-white.png')}}, {{asset('assets/images/bezhoe/bz-logo.png-white.png')}} 2x" src="{{asset('assets/images/bezhoe/bz-logo-white.png')}}" alt="Bezhoe Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">
							<a href="#" class="button bg-contrast-1000 text-contrast-100 h-bg-dark h-text-light button-rounded">Contact Us</a>
						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="#"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Workflow</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Product</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Clients</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element bg-angle include-header">

			<!-- Slider Background Map
			============================================= -->
			<img class="img-map parallax position-absolute" src="{{asset('assets/images/svg/map-light.svg')}}" alt="Image" data-0="opacity: 0.05;margin-top:0px" data-800="opacity: 0.5;margin-top:150px">

			<!-- Slider Background Cloud
			============================================= -->
			<div class="cloud-wrap">
				<div class="c1"><div class="cloud"></div></div>
				<div class="c2"><div class="cloud"></div></div>
				<div class="c3"><div class="cloud"></div></div>
				<div class="c4"><div class="cloud"></div></div>
				<div class="c5"><div class="cloud"></div></div>
			</div>

			<!-- Slider Titiles
			============================================= -->
			<div class="vertical-middle container dark">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-5">
						<div class="slider-title">
							<h2 class="text-white text-rotater mb-3 d-inline-block" data-separator="," data-rotate="fadeIn" data-speed="3500">Build your own<br> <span class="t-rotate text-white">Awesome,Beautiful,Great</span> Application.</h2>
							<p>With a passion for technology and a commitment to excellence, our team of skilled developers is dedicated to turning your vision into reality. From web and mobile applications to enterprise solutions. Explore our world of development and discover how we can help you achieve your digital ambitions.</p>
						</div>
					</div>
					<div class="col-md-5 d-none d-md-block">
						<img src="{{asset('assets/images/3.png')}}" alt="Image">
					</div>
				</div>
			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap py-0">
                @yield('content')
			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-4">

					<div class="row">

						<div class="col-md-4 col-sm-6 mb-0 mb-sm-4 mb-md-0">

							<div class="widget">

								<h4>About Bezhoe</h4>

								<p>We believe in Simple, Velocity &amp; Pay as you GO.</p>

								<div style="background: url('{{asset('assets/images/world-map.png')}}') no-repeat left center; background-size: auto 100%;">
									<address>
										<strong>Address:</strong><br>
										Graha Mampang Lt. 3 Suite 305<br>
										Jl. Mampang Prapatan Raya Kav. 100<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> 0813 8487 7636<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@bz-land.id <br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> firman.solihuddin@gmail.com <br>
								</div>

							</div>

						</div>

						<div class="col-md-3 col-6 mt-5 mt-sm-0">

							<div class="widget">

								<h4>Features</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Support Forums</a></li>
								</ul>

							</div>

						</div>

						<div class="col-md-3 col-6 mt-5 mt-sm-0">

							<div class="widget">

								<h4>Social</h4>

								<ul class="list-unstyled iconlist">
									{{-- <li><i class="text-white fa-brands fa-x-twitter"></i><a href="#" target="_blank"> Twitter</a></li>
									<li><i class="text-white bi-instagram"></i><a href="#" target="_blank"> Instagram</a></li>
									<li><i class="text-white fa-brands fa-youtube"></i><a href="#" target="_blank"> YouTube</a></li>
									<li><i class="text-white fa-brands fa-xing"></i><a href="#"> Xing</a></li> --}}
									<li><i class="text-white fa-brands fa-facebook-f"></i><a href="#" target="_blank"> Facebook</a></li>
									<li><i class="text-white fa-brands fa-github"></i><a href="#"> Github</a></li>
								</ul>

							</div>

						</div>

						<div class="col-md-2 col-sm-6 mt-4 mt-sm-0">

							<div class="widget">

								<h4>Support</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li><a href="#">Contact Support</a></li>
								</ul>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

				<div class="line line-sm m-0"></div>

			</div>


			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent">
				<div class="container">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-start">
							Made with ❤️ by PT Bezhoe Infotek Indonesia<br>
						</div>

						<div class="col-12 col-md-auto text-center text-md-end">
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('assets/js/plugins.min.js')}}"></script>
	<script src="{{asset('assets/js/functions.bundle.js')}}"></script>

	<!-- Parallax Script
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

	<!-- HotSpot -->
	<script src="{{asset('assets/js/jquery.hotspot.js')}}"></script>

	<!-- Range Slider -->
	<script src="{{asset('assets/js/components/rangeslider.min.js')}}"></script>

	<script>
		jQuery(document).ready( function() {
			var pricingCPU = 1,
				pricingRAM = 1,
				pricingStorage = 10,
				elementCPU = jQuery(".range-slider-cpu"),
				elementRAM = jQuery(".range-slider-ram"),
				elementStorage = jQuery(".range-slider-storage");

			elementCPU.ionRangeSlider({
				grid: false,
				values: [1,2,4,6,8],
				postfix: ' Core',
				onStart: function(data){
					pricingCPU = data.from_value;
				}
			});

			elementCPU.on( 'change', function(){
				pricingCPU = jQuery(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementRAM.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from:1,
				max: 32,
				postfix: ' GB',
				onStart: function(data){
					pricingRAM = data.from;
					console.log(data);
				}
			});

			elementRAM.on( 'onStart change', function(){
				pricingRAM = jQuery(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementStorage.ionRangeSlider({
				grid: false,
				step: 10,
				min: 10,
				max: 100,
				postfix: ' GB',
				onStart: function(data){
					pricingStorage = data.from;
				}
			});

			elementStorage.on( 'change', function(){
				pricingStorage = jQuery(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			calculatePrice( pricingCPU, pricingRAM, pricingStorage );

			function calculatePrice( cpu, ram, storage ) {
				var pricingValue = ( Number(cpu) * 10 ) + ( Number(ram) * 8 ) + ( Number(storage) * 0.5 );
				jQuery('.cpu-value').html(pricingCPU);
				jQuery('.ram-value').html(pricingRAM);
				jQuery('.storage-value').html(pricingStorage);
				jQuery('.cpu-price').html('$'+pricingCPU * 10);
				jQuery('.ram-price').html('$'+pricingRAM * 8);
				jQuery('.storage-price').html('$'+pricingStorage * 0.5);
				jQuery('.pricing-price').html( '$'+pricingValue );
			}
		});

		jQuery(window).on( 'load', function(){
			jQuery('#hotspot-img').hotSpot();
		});
	</script>

	@stack('scripts')
</body>
</html>