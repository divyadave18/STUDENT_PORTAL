<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHARUSAT Student Portal</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./Photos/Logo.png" type="image/icon type">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		
		<div class="row">
			<div class="col-lg-3 col-md-3" style="left:50px;top:-40px">
				<a href="./index.php">
					<img src="./Photos/Logo.png">
				</a>
			<div class="site-logo"></div>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
		</div>
		<div class="col-lg-9 col-md-9">
			<a href="./Student/Student_Ragistration.php" class="site-btn header-btn">Registration</a>
			<nav class="main-menu"  style="margin-top:-1px;">
				<ul>
					<li><a href="./Student/Student_Login.php">Material</a></li>
					<li><a href="./Student/Student_Login.php">Scheduling</a>
				</li>
							
					<li><a href="./Student/Student_Login.php">Result</a></li>
					<li><a href="./Student/Student_Login.php">News</a></li>
					<li><a href="./Student/Student_Login.php">Library</a></li>
					<li><a href="About.php">About us</a></li>
					<li><a href="Contact.php">Contact</a></li>
					</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="Photos/bg.jpg">

		<div class="container">
			<div class="hero-text text-white">
				<h2>Welcome</h2>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter" action="./Student/Login.php" method="post">
						<input id="login" type="text" name="Enrollment" placeholder="Enrollment" required/>
						<input id="passwd" class="last-s" name="password" type="password" placeholder="Password" required/>
						<button class="site-btn">Log In</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Categories</h2>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos/categories/Material.jpg"></div>
						<div class="ci-text">
							<h5>Materials</h5>
							<p>providing study Materials from Faculty</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos/categories/Scheduling.jpg"></div>
						<div class="ci-text">
							<h5>Scheduling</h5>
							<p>Here providing Scheduling from collage</p>
						</div>
					</div>
				</div
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos/categories/Result.jpg"></div>
						<div class="ci-text">
							<h5>Result</h5>
							<p>Here providing your Result from Faculty</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos//categories/Library.jpg"></div>
						<div class="ci-text">
							<h5>Library</h5>
							<p>Here providing books availability in Library</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos//categories/News.jpg"></div>
						<div class="ci-text">
							<h5>News</h5>
							<p>Here providing collages News</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos//categories/About_Us.jpg"></div>
						<div class="ci-text">
							<a href="./About.php">
                                <h5>About Us</h5>
							    <p>Here providing About Us of collage</p>
                            </a>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="./Photos//categories/Contact_Us.jpg"></div>
						<div class="ci-text">
							<a href="./Contact.php">
                                <h5>Contact Us</h5>
							    <p>Here providing Contact with Us</p>
                            </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->

	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>"Charotar University of Science and Technology" has been found with sole intention to produce world class engineers for converting global challenges into opportunities through "Value Embedded Quality Technical Education".</p>
			</div>
			<div class="text-center pt-5">
				<a href="./Student/Student_Ragistration.php" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>

	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Faculty Now!</h2>
			</div>
			<div class="text-center pt-5">
				<a href="./Faculty/Faculty_Login.php" class="site-btn">Login Now</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->

	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<ul class="contact-list"></ul>
					</div>
					<div class="widget-item">
						<h4>Connect</h4>
						<ul>
							<li><a href="https://www.instagram.com/thecharusat/">Instagram</a></li>
							<li><a href="https://www.facebook.com/thecharusat/">Facebook</a></li>
							<li><a href="https://twitter.com/thecharusat?lang=en">Twitter</a></li>
							<li><a href="https://www.youtube.com/@CHARUSATUniversityOfficial">Youtube</a></li>
							<li><a href="https://in.linkedin.com/school/charotar-university-of-science-&-technology-charusat-/">linkedin</a></li>
					 		<li><a href="https://www.charusat.ac.in/">Website</a></li>
							<li><a href="mailto:principal.cspit@charusat.ac.in?">Send Email</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Categories</h4>
						<ul>
							<li>Materials</li>
							<li>Scheduling</li>
							<li>Result</li>
							<li>Library</li>
							<li>News</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>CHARUSAT</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="About.php">About us</a></li>
							<li><a href="Contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>We don’t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="">Terms & Conditions</a></li>
					<li><a href="">Register</a></li>
					<li><a href="">Privacy</a></li>
				</ul>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</html>