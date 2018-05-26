<?php 
include 'config.php';

if (isset($_POST['booknow'])) {
	if ($_SESSION['user_name']!="") {
		header("location:book.php");
	}
	else{
		header("location:login.php");
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PROJECT</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container-fluid">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="height: 5%">
                        
                        <div class="hamburger" align="right">
							<i class="fa fa-bars trans_200"></i>
						</div>

						<div class="logo_container">
							<div class="logo"><a href="#"> &nbsp;ADITYA</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="events.html">events</a></li>
								<li class="main_nav_item"><a href="#contact-us">contact</a></li>
                                <?php if(@$_SESSION['user_name']==""){ ?>
                                <li class="main_nav_item"><a href="login.html">Login</a></li>
                                <?php } else{ ?>
									<li class="main_nav_item"><a href="contact.html">
										<?php echo $_SESSION['user_name'] ?>
									</a></li>
								<?php } ?>
							</ul>
						</div>

					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/scr.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="events.html">events</a></li>
				<li class="menu_item"><a href="#contact-us">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/combg1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>BOOK</h1>
							<h1>the auditorium</h1>
                          	<form method="post">
								<div class="button home_slider_button"><div class="button_bcg"></div>
									<button name="booknow" class="btn" style="background: none;padding: 10px 30px;font-size: 20px;color: #fff">Book Now</button>
							</div>
								</form>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/combg1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>BOOK</h1>
							<h1>the auditorium</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div>
                                <form method="post">
									<button>Book Now</button>
								</form>
                            </div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/combg1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>BOOK</h1>
							<h1>the auditorium</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="../adminlogin/index.php">Book Now</a></div>
						</div>
					</div>
				</div>

			</div>			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>AEC</span></div>
                            <div class="search_tab active2 d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt=""><span>ACET</span></div>
							<div class="search_tab active3 d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt=""><span>ACE</span></div>
							<div class="search_tab active4 d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt=""><span>PHARMACY</span></div>
							<div class="search_tab active5 d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt=""><span>DIPLOMA</span></div>
							<div class="search_tab active6 d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt=""><span>B-SCHOOLS</span></div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div>
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                    
                    					<!-- Search Panel -->

					<div class="search_panel active2">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<!--div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div-->
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                    
                    					<!-- Search Panel -->

					<div class="search_panel active3">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div>
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                    
                    					<!-- Search Panel -->

					<div class="search_panel active4">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div>
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                    
                    					<!-- Search Panel -->

					<div class="search_panel active5">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div>
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                    
                    					<!-- Search Panel -->

					<div class="search_panel active6">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item col-md-3">
								<div>check in</div>
								<input type="date" class="check_in search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>check out</div>
								<input type="date" class="check_out search_input" placeholder="DD-MM-YYYY">
							</div>
							<div class="search_item col-md-3">
								<div>Session</div>
								<select name="session" id="session_1" class="dropdown_item_select search_input">
									<option>Morning</option>
									<option>Afternoon</option>
								</select>
							</div>
							<button class="button search_button col-md-3">Check Availability</button>
						</form>
					</div>
                
				</div>
			</div>
		</div>		
	</div>

	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best Seminar Halls in our campus</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>FULLY AIR CONDITIONED AND WIDER SEATING AVAILABILITY WITH MULTIPLE FACILITIES LIKE VIDEO MONITORS,WIDE SCREEN PROJECTORS. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-3 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<div class="intro_item_background" style="background-image:url(images/AEC.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more</a></div>
                        </div>
					</div>
				</div>

              <div class="col-lg-3 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
					<div class="intro_item_background" style="background-image:url(images/ACET.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more</a></div>
						</div>
					</div>
				</div>
				<!-- Intro Item -->

				<div class="col-lg-3 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<div class="intro_item_background" style="background-image:url(images/ACE.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more</a></div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-3 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<div class="intro_item_background" style="background-image:url(images/listing_thumb_1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more</a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	
    <!-- LIST OF HALLS -->
    
    <div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">LIST OF HALLS IN OUR COLLEGE</h2>
				</div>
			</div>
			<div class="row trending_container">

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-1</a></div>
							<div class="trending_price">GROUND FLOOR</div>
							<div class="trending_location">MAIN DEPT OF AEC</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-2</a></div>
							<div class="trending_price">ROOM NO-112</div>
							<div class="trending_location">COTTON BHAVAN</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-3</a></div>
							<div class="trending_price">ROOM NO-102</div>
							<div class="trending_location">KL RAO BHAVAN</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-4</a></div>
							<div class="trending_price">ROOM NO-121</div>
							<div class="trending_location">BILLGATES BHAVAN</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-5</a></div>
							<div class="trending_price">ROOM NO-102</div>
							<div class="trending_location">ACET-MAIN BLOCK</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-6</a></div>
							<div class="trending_price">ROOM NO-310</div>
							<div class="trending_location">VISWESWARAYYA BHAVAN</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-7</a></div>
							<div class="trending_price">ROOM NO-211</div>
							<div class="trending_location">RAMANUJAN BHAVAN</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">HALL-8</a></div>
							<div class="trending_price">ROOM NO-102</div>
							<div class="trending_location">ABDUL KALAM BHAVAN</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


    
    <!-- CONTACT FORM -->
    
    <div class="contact">


		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image"><img src="images/trend_8.png" >
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer clo-md-12" id="contact-us">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-md-6 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
							</div>
							<p class="footer_about_text">ADITYA EDUCATIONAL INSTITUTIONS.<br/>
							Enlightens the Nescience.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
                
                <div class="col-md-3"></div>

				<!-- Footer Column -->
				<div class="col-md-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
										<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">ADB ROAD,ADITYA NAGAR,SURAMPALEM,KAKINADA</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text"> 0884-23 26 202, +91 99498 76662, +91 99897 76661.</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:office@aec.edu.in?Subject=Hello" target="_top">aec.edu.in</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://www.aec.edu.in">www.aec.edu.in</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
                </div>

			</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>Copyright &copy; 2018 All rights reserved <br/>made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://technicalhub.io" target="_blank">TECHNICAL HUB</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<!--li class="footer_nav_item"><a href="offers.html">offers</a></li-->
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="#bottom">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>  
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>