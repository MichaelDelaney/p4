<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Stroke of Genius')</title>

    <meta charset='utf-8'>
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
	<!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

  	<!-- LOADER DIV - ONLY HOME -->
  	<div id="loader">
  		<div id="loading-logo"></div>
  	</div>
  	<div id="page">
	  	<!-- START HEADER -->
	  	<header id="header" class="big with-separation-bottom">
	  		<!-- POINTER ANIMATED -->
	  		<canvas id="header-canvas"></canvas>
	  		
	  		<!-- TOP NAVIGATION -->
	  		<div id="top-navigation">
		  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
			  		<li class="menu-item"><i class="fa fa-phone"></i> 732.306.7894</li>
			  		<li class="menu-item"> mdelaney@fas.harvard.edu</a></li>
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
			  			<a href="beginnerlessons" data-description="Getting started">Beginner</a>
			  		</li>
			  		<li class="menu-item"><a href="skills.html" data-description="Build on skills">Advanced</a></li>
		  		</ul>
		  		<div  class="animate-me flipInX" data-wow-duration="3s">
		  				<a href="home" id="logo-navigation"></a>
		  		</div>
		  		<ul id="right-navigation" class="animate-me fadeInRightBig">
			  		<li class="menu-item"><a href="about.html" data-description="Help us grow">Request a Lesson</a></li>
			  		<li class="menu-item"><a href="contact.html" data-description="Let's get in touch">Contact</a></li>
		  		</ul>
	  		</nav>
    @yield('content')

    	
	  		
	  
  	</div>
		<!-- START FOOTER -->
	  	<footer id="footer" class="with-separation-top">
		  	<aside id="widgets" class="container">
		  		<div class="row">
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInLeft">
			  			<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
			  			<p>P4's main objective is to use PHP/Laravel to create a simple application that has a MySQL database and demostrates CRUD interactions.</p>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInUp">
				  		<h4>Navigation</h4>
				  		<ul>
					  		<li><a href="index.html">Beginner</a></li>
					  		<li><a href="portfolio.html">Advanced</a></li>
					  		<li><a href="blog.html">Request a Lesson</a></li>
					  		<li><a href="about.html">Contact Us</a></li>
				  		</ul>
			  		</div>
		  			<!-- WIDGET -->
			  		<div class="col-md-4 widget animate-me fadeInRight">
			  			<h4>Harvard Extension School - CSCI E-15</h4>
			  			<ul class="contact-informations">
				  			<li class="contact-address">Michael Delaney</li>
				  			<li class="contact-phone">(732) 306-7894</li>
							<li>       P4 - December 18th, 2014</li>
			  			</ul>
			  			<a href="mailto:mdelaney@fas.harvard.edu" class="btn btn-default"><i class="fa fa-envelope-o"></i> mdelaney@fas.harvard.edu</a>
			  		</div>
		  		</div>
		  	</aside>
		  	<div id="copyright" class="animate-me fadeInUp">
		  		<div class="container">
			  		<p>&#169; 2014 All Rights Reserved. Produced By Michael Delaney For Academic Purposes.</p>
			  		
		  		</div>
		  	</div>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
	  	<!-- SCROLL TOP -->
	  	<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
	<!-- SCRIPTS -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
	<script type="text/javascript">
		/*TEXT TICKER (ONLY FOR HOME PAGE)*/
		$('#ticker-text').vTicker('init', {
			speed: 300, 
		    pause: 2000
	    });
	</script>
    <script src="js/custom.js"></script>
</body>
</html>