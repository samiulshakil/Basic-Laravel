
<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Airspace | Creative Agency Bootstrap template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('/contents/website')}}/img/favicon.png" />
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/animate-css/animate.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/magnific-popup/dist/magnific-popup.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/plugins/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="{{asset('/contents/website')}}/css/style.css">
</head>
<body id="body">
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="{{url('/')}}">
								<img src="{{asset('/contents/website')}}/images/logo.png" alt="Logo">
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="portfolio.html">Portfolio Filter</a></li>
										<li><a href="portfolio-single.html">Portfolio Single</a></li>
									</ul>
								</li>
								<li><a href="service.html">Service</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
										<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
										<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
										<li><a href="blog-full-width.html">Blog Full Width</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="pricing.html">Pricing Table</a></li>
									</ul>
								</li>
								<li><a href="{{url('/contact')}}">Contact</a></li>
							</ul>
							</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			</header>
      @yield('content')
      <footer class="footer">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="footer-manu">
      					<ul>
      						<li><a href="#">About Us</a></li>
      						<li><a href="#">Contact us</a></li>
      						<li><a href="#">How it works</a></li>
      						<li><a href="#">Support</a></li>
      						<li><a href="#">Terms</a></li>
      					</ul>
      				</div>
      				<p class="copyright">Copyright 2018 &copy; Design & Developed by <a href="http://www.themefisher.com">themefisher.com</a>. All rights reserved.
      					<br>
      					Get More <a href="https://themewagon.com/theme_tag/free/" target="_blank">Free Bootstrap Templates</a>
      				</p>
      			</div>
      		</div>
      	</div>
      </footer>
          <script src="https://code.jquery.com/jquery-git.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/slick-carousel/slick/slick.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/mixitup/dist/mixitup.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/SyoTimer/build/jquery.syotimer.min.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
          <script src="{{asset('/contents/website')}}/plugins/google-map/map.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
          <script src="{{asset('/contents/website')}}/js/script.js"></script>
    </body>
</html>
