<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="imjalpreet | Jalpreet Singh Nanda">
        
        <meta name="author" content="Jalpreet Singh Nanda">
		
        <title>imjalpreet | Jalpreet Singh Nanda | Who am I?</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>static/img/favicon.png" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/media-queries.css">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <!-- Courgette / Title Font -->
        <link href='http://fonts.googleapis.com/css?family=Courgette:400,300' rel='stylesheet' type='text/css'>
        <!-- Vast Shadow / Title Font -->
        <link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="<?php echo base_url(); ?>static/js/modernizr-2.6.2.min.js"></script>

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '847749778641646',
                    xfbml      : true,
                    version    : 'v2.3'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

		<script>
			!function(d,s,id) {
				var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)) {
					js=d.createElement(s);
					js.id=id;
					js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);
				}
			}
			(document,"script","twitter-wjs");
		</script>
        
	</head>
	
    <body id="body" onbeforeunload="getBirth();">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="imjalpreet Preloader" src="<?php echo base_url(); ?>static/img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">imjalpreet</h2>
								<h3 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">Eat. Sleep. Give 100%. Repeat.</h3>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">Jalpreet Singh Nanda</h2>
								<h3 class="animated fadeInUp">Computer Science and Engineering, IIIT Hyderabad</h3>
								<a class="btn btn-green animated fadeInUp" href="#about">About Me</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">Current City</h2>
								<h3 class="animated fadeInLeft">Mumbai, India</h3>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
                            <div class="logo">imjalpreet</div>
                        </h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#favourites">My Favourites</a></li>
                        <li><a href="#showcase">Projects</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-me">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>About <span class="color">Me</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About Me -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-child fa-4x"></i>
							</div>
                            <!-- Early Life -->
							<div class="about-content text-center">
								<h3 class="ddd">Early Life</h3>
								<p></p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
                            <img src="<?php echo base_url(); ?>static/img/logos/comingSoon.png" width="300px" height="250px"/>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-graduation-cap fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Student Life</h3>
								<p></p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- Projects Completed -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="11">11</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end Projects Completed -->
				
					<!-- Projects Contributed -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="7">7</span>
							</div>
							<i class="fa fa-code fa-3x"></i>
				            <h3>Projects Contributed To</h3>
							
						</div>
					</div>
					<!-- end Projects Contributed -->
					
					<!-- Age -->
					<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="20">20</span>
							</div>
							<i class="fa fa-rocket fa-3x"></i>
							<h3>Number of rides around the sun</h3>
						</div>
					</div>
					<!-- end Age -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		<!-- Start favourites Section
		==================================== -->
		
		<section id="favourites" class="bg-one">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>My <span class="color">Favourites</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-code fa-5x"></i>
							</div>
							<h3>Coming Soon...</h3>
							<p>Under Construction!</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->


		<!-- Start Team Skills
		=========================================== -->

		<section id="team-skills" class="parallax-section">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">

					<!-- section title -->
					<div class="title text-center">
						<h2>My <span class="color">Skills</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="90">
								<span class="percent">86</span>
							</span>
							<h3><i class="fa fa-html5"></i> HTML 5</h3>
							<p>Coming Soon</p>
						</div>
					</div>
					<!-- end skill set -->

					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="85">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-android"></i> Android</h3>
							<p>Coming Soon</p>
						</div>
					</div>
					<!-- end skill set -->

					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="70">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-apple"></i> IOS</h3>
							<p>Coming Soon</p>
						</div>
					</div>
					<!-- end skill set -->

				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->


		<!-- Start Portfolio Section
		=========================================== -->

		<section id="showcase">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">

						<!-- section title -->
						<div class="title text-center">
							<h2>My <span class="color">Works</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<!-- portfolio item filtering -->
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".contributor">Projects Contributed To</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".app">Mobile App</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Web Design</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".game">Games</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Photoshop</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->

					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->

			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">

					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="static/img/portfolio/portx1.jpg" data-title="Coming Soon" data-description="">
							<img src="<?php echo base_url(); ?>static/img/portfolio/portx1.jpg" alt="imjalpreet">
							<div class="hover-mask">
								<h3>Coming Soon</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->

				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->

		</section>   <!-- End section -->
		
		<!-- Start Twitter Feed
		=========================================== -->
		
		<section id="twitter-feed" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					
						<!-- twitter bird -->
						<div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">
							<span>
								<i class="fa fa-twitter fa-4x"></i>
							</span>
						</div>
						<!-- /twitter bird -->
						
						<!-- fetching tweet -->
						<div class="wow fadeIn" data-wow-duration="2000ms">
							<a class="twitter-timeline" href="https://twitter.com/imjalpreet" data-widget-id="612743367043121153" data-chrome="noheader noscrollbar transparent">
                                Tweets by @imjalpreet
                            </a>
						</div>
						<!-- /fetching tweet -->
						
						<!-- follow me button -->
						<a href="https://twitter.com/imjalpreet" title="Follow Me" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Follow Me</a>
						<!-- /follow me button -->
						
					</div>
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!--
		Start Blog Section
		=========================================== -->
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Latest <span class="color">Posts</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">
					
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="<?php echo base_url(); ?>static/img/blog/blog.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Coming Soon</h3>
									<p></p>
									<a class="btn btn-transparent" href="#">Under Construction</a>
								</div>
							</div>						
						</article>
						<!-- /single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="<?php echo base_url(); ?>static/img/blog/blog.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>static/img/blog/blog.jpg" alt="Flying bicycle" class="img-responsive">
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>static/img/blog/blog.jpg" alt="3D Beach Art | imjalpreet" class="img-responsive">
									</div>
								</div>
								
								<div class="excerpt">
                                    <h3>Coming Soon</h3>
                                    <p></p>
                                    <a class="btn btn-transparent" href="#">Under Construction</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->

					</div>

					<div class="all-post text-center">
						<a class="btn btn-transparent" href="#">View All Post</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->

		<!-- Start Facebook
		=========================================== -->

		<section id="testimonial" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- section title -->
						<div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
							<h2>Recent Posts on <span class="color"> Facebook</span></h2>
                            <h3>Under Construction</h3>
						</div>

					</div> 		<!-- end col lg 12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
		
		<!-- Srart Contact Me
		=========================================== -->		
		<section id="contact-me">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p></p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>[Place]</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>[Phone]</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>[Fax]</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>[Email]</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>	
			<!-- /Google Map -->
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- footer -->
						<div class="copyright text-center">
							<a href="#body">
								<div class="logo">imjalpreet</div>
							</a>
						</div>
						<!-- /footer -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:void(0)" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="<?php echo base_url(); ?>static/js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="<?php echo base_url(); ?>static/js/jquery.slitslider.js"></script>
		<script src="<?php echo base_url(); ?>static/js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="<?php echo base_url(); ?>static/js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo base_url(); ?>static/js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="<?php echo base_url(); ?>static/js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="<?php echo base_url(); ?>static/js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="<?php echo base_url(); ?>static/js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="<?php echo base_url(); ?>static/js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url(); ?>static/js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="<?php echo base_url(); ?>static/js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="<?php echo base_url(); ?>static/js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="<?php echo base_url(); ?>static/js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="<?php echo base_url(); ?>static/js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="<?php echo base_url(); ?>static/js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="<?php echo base_url(); ?>static/js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="<?php echo base_url(); ?>static/js/grid.js"></script>
		<!-- Custom js -->
		<script src="<?php echo base_url(); ?>static/js/custom.js"></script>

    </body>
</html>