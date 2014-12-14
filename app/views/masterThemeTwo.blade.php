<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>@yield('title', 'Stroke of Genius')</title>
<!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->	
	<!--<link rel="shortcut icon" href="images/favicon.png" />-->
    <!-- STYLESHEETS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="css/options.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- START BODY -->
  <body>

  	<div id="page">
	  	<!-- START HEADER -->
	  	<header id="header" class="small with-separation-bottom">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- TOP NAVIGATION -->
	  		<div id="top-navigation">
		  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
			  	<li class="menu-item"><i class="fa fa-phone"></i> 732.306.7894</li>
			  		<li class="menu-item"><i class="fa fa-question"></i> mdelaney@fas.harvard.edu</a></li>
			  		<li class="menu-item"><span class="navigation-social">P4 - Dynamic Web Applications</span></li>
			  		<li class="menu-item">
			  			<!-- SEARCHFORM -->
			  			<div id="search-container" class="animate-me fadeInDown">
					  		<form role="search" method="get" action="#" >
								<input type="text" value="" name="s" id="s" placeholder="Search..."/>
								<input type="hidden" name="searchsubmit" id="searchsubmit" value="true" />
								<button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
					        </form>
				  		</div>
			  			<a href="#" id="search-toggle"><i class="fa"></i></a>
			  		</li>
		  		</ul>
	  		</div>
	  	
	  		<!-- MOBILE NAVIGATION -->
	  		<nav id="navigation-mobile"></nav>
	  	
	  		<!-- MAIN MENU -->
	  		<nav id="navigation">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
		  		<ul id="left-navigation" class="animate-me fadeInLeftBig">
			  		<li class="menu-item menu-item-has-children">
			  			<a href="index.html" data-description="All starts here">Home</a>
			  			<ul class="sub-menu bounceInDown">
			  				<li class="menu-item"><a href="index.html">Slider fullscreen</a></li>
				  			<li class="menu-item"><a href="index2.html">Video fullscreen</a></li>
				  			<li class="menu-item"><a href="index3.html">Single Image</a></li>
				  			<li class="menu-item"><a href="index-onepage.html"><i class="fa fa-star"></i> One Page</a></li>
			  			</ul>
			  		</li>
			  		<li class="menu-item menu-item-has-children">
			  			<a href="portfolio.html" data-description="What we do">Portfolio</a>
			  			<ul class="sub-menu bounceInDown">
			  				<li class="menu-item"><a href="portfolio.html">All Projects</a></li>
				  			<li class="menu-item"><a href="portfolio-single.html">Single Project</a></li>
				  			<li class="menu-item"><a href="faq.html">FAQ</a></li>
			  			</ul>
			  		</li>
			  		<li class="menu-item"><a href="skills.html" data-description="We're the best">Skills</a></li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s">
		  			<a href="#" onclick='return false;' id="logo-navigation"></a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item current-menu-item"><a href="about.html" data-description="We are a team">About</a></li>
			  		<li class="menu-item menu-item-has-children">
			  			<a href="blog.html" data-description="We share">Blog</a>
			  			<ul class="sub-menu bounceInDown">
				  			<li class="menu-item"><a href="blog.html">All Posts</a></li>
				  			<li class="menu-item"><a href="blog-single.html">Single Post</a></li>
			  			</ul>
			  		</li>
			  		<li class="menu-item"><a href="contact.html" data-description="Let's get in touch">Contact</a></li>
		  		</ul>
	  		</nav>

	  		<!-- SHADOW -->
	  		<div id="shade"></div>

	  		<!-- HEADER SLIDER -->
		  	<div class="flexslider" id="header-slider">
		  		<ul class="slides">
		  			<li><img src="images/backgrounds/bg1.jpg" alt="SLider Image"></li>
		  		</ul>	
		  	</div>
	  		
	  	</header>
	  	<!-- END HEADER -->
	  	
	  @yield('content')

	  	
	  	<!-- START FOOTER -->
	  	<footer id="footer" class="with-separation-top">
		  	<aside id="widgets" class="container">
		  		<div class="row">
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInLeft">
			  			<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
			  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper felis pulvinar neque pharetra auctor. Donec vel erat pretium, interdum justo sed, mollis tortor.</p>
			  			<a href="about.html" class="btn btn-default"><i class="fa fa-users"></i> Read more</a>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInUp">
				  		<h4>Navigation</h4>
				  		<ul>
					  		<li><a href="index.html">Home</a></li>
					  		<li><a href="portfolio.html">Portfolio</a></li>
					  		<li><a href="blog.html">Blog</a></li>
					  		<li><a href="about.html">About Us</a></li>
				  		</ul>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>Contact</h4>
			  			<ul class="contact-informations">
				  			<li class="contact-address">666 Avenue des Champs-�lys�es. 75000 Paris</li>
				  			<li class="contact-phone">(+33)0 11 22 33 44</li>
			  			</ul>
			  			<ul class="widget-social">
			  				<!-- ALL ICONS AVAILABLE ->http://fortawesome.github.io/Font-Awesome/icons/#brand-->
				  			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  			<li><a href="#"><i class="fa fa-skype"></i></a></li>
				  			<li><a href="#"><i class="fa fa-rss"></i></a></li>
			  			</ul>
			  			<a href="contact.html" class="btn btn-default"><i class="fa fa-envelope-o"></i> Contact Form</a>
			  		</div>
		  		</div>
		  	</aside>
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<p>&#169; 2014 All Rights Reserved. Powered by <a href="index.html">Starry</a>.</p>
			  		<ul id="footer-navigation">
				  		<li><a href="page.html">Terms of Use</a></li>
				  		<li><a href="page.html">Privacy Policy</a></li>
				  		<li><a href="contact.html">Contact Us</a></li>
			  		</ul>
		  		</div>
		  	</div>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
  	</div>

    <!-- SCRIPTS -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>
  