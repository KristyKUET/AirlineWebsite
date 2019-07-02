<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>FlyBangla</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="#">Visit Us</a></li>
			  					<li><a href="#">Buy Tickets</a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      
				        <a href="flybangla.php"><img src="img/airlogo.png" width='80px' height="50px" alt="" title="" /></a>
				      
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="FlyBangla.php">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a href=#book>Book</a></li>
				          <li><a href=#dest>Destinations</a></li>
				          <li><a href="hotels.html">Schedule</a></li>
				          <li class="menu-has-children"><a href=#experience>Experience</a>
				            <ul>
				              <li><a href=#first>First Class</a></li>
											<li><a href=#second>Business</a></li>
											<li><a href=#third>Economy</a></li>
				            </ul>
				          </li>	
									<li><a href="reg.php">Register</a></li>
									<?php
									session_start();
									if(!empty($_SESSION["user"]))
									{
											$username = $_SESSION["user"];

											echo "<li><a href='prodesign.php?n=$username'>$username</a></li>";
											
									}
									else{
											echo "<li><a href='Login.php'>Login</a></li>";        
									}

									?>
									
									<li><a href="logout.php">Logout</a></li>        
				          <li><a href="contact.php">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header>
			<!-- #header -->
			
			<!-- Start hot-deal Area -->
		<section class="hot-deal-area">
			<div class="container2">
				
				<div class="row justify-content-center">
					<div class="col-lg-20 active-hot-deal-carusel">
						<div class="single-carusel">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="img/areo.jpg" alt="">
							</div>
							
							<div class="details">
								<h4 class="text-white">Country's latest domestic arline</h4>
								
							</div>
						</div>
						<div class="single-carusel">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="img/inside.jpg" alt="">
							</div>
							
							<div class="details">
								<h4 class="text-white">Experience luxurious journey with FlyBangla</h4>
								
							</div>
						</div>
						<div class="single-carusel">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="img/travel.jpeg" alt="">
							</div>
						
							<div class="details">
								<h4 class="text-white">Travel the whole country with FlyBangla</h4>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End hot-deal Area -->
			<!-- start banner Area -->
			<section class="banner-area relative" id="book">
									
					<div class="container">
						<div class="row fullscreen align-items-center justify-content-between">
							<div class="col-lg-6 col-md-6 banner-left">
								<h6 class="text-white">Away from monotonous life</h6>
								<h1 class="text-white">Magical Travel</h1>
								<p class="text-white">
										Book your flight now, grab amazing offers and experience wonderful journy with FlyBangla
								</p>
								<a href="#" class="primary-btn text-uppercase">Get Started</a>
							</div>
							<div class="col-lg-4 col-md-6 banner-right">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
								  </li>
								  
								</ul>
								<div class="tab-content" id="myTabContent">
								  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
									<form class="form-wrap" action="book_back.php" method="post" >
									<input type="text" class="form-control" name="from" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
									<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
									<input type="text"  class="form-control" name="depdate" placeholder="Departure Date " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
									<input type="text" class="form-control" name="class" placeholder="Class " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Class '">
									<input type="number" min="1" max="20" class="form-control" name="passenger" placeholder="NO OF Passengers " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
													
									<div ><button type="submit">Book Now</button></div>									
																
									</form>
								  </div>
								  
								</div>
							</div>
						</div>
					</div>					
				</section>
				<!-- End banner Area -->		
		
		
				<!--book--
            <br><br><br><br>
            <div class="row">
			<div class="col-md-6" id="book">
			<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
			<form class="form-wrap" action="book_back.php" method="post">
				<input type="text" class="form-control" name="from" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
				<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
				<input type="text"   class="form-control" name="depdate" placeholder="Departure Date " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
				<input type="text" class="form-control" name="class" placeholder="Class " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Class '">
				<input type="number" min="1" max="20" class="form-control" name="passenger" placeholder="NO OF Passengers " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
					
				<div><button type="submit">Book Now</button></div>							
			</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
								<h1 class="mb-8">BOOK YOUR FLIGHT NOW</h1>
								<p>Book your flight now, grab amazing offers and experience wonderful journy with FlyBangla </p>
						</div>
				</div>
		</div></div>

							
		</div>
					
			-- End book Area -->

		
			<!-- Start popular-destination Area -->
			

			<div class="section-top-border" id="dest">
			<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
				<h1 class="mb-10">Destinations</h1>
				<p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
				</div>
				</div>
					</div>
						
						<div class="row gallery-item" style="padding:30px">
							<div class="col-md-4">
								<div class="single-destination relative">
								<div class="thumb relative">
								<a href="img/elements/raj.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/raj.jpg);"></div></a>
								</div>
								<div class="desc">	
								<a href="#" class="price-btn">2500 BDT</a>			
								<h4>PINK CITY</h4>
								<p>Rajshahi</p>			
								</div>
								</div>
							</div>
							
							<div class="col-md-4">
							<div class="single-destination relative">
							<div class="thumb relative">
								<a href="img/elements/jessor.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/jessor.jpg);"></div></a>
							</div>
							<div class="desc">	
							<a href="#" class="price-btn">2700 BDT</a>			
							<h4>CITY OF KNOWLEDGE</h4>
							<p>Jessor</p>			
							</div>
							</div>
							</div>
							<div class="col-md-4">
							<div class="single-destination relative">
							<div class="thumb relative">	
							<a href="img/elements/cox_bazar.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/coxs_bazar.jpg);"></div></a>
							</div>
							<div class="desc">	
							<a href="#" class="price-btn">3500 BDT</a>			
							<h4>OCEAN'S BEAUTY</h4>
							<p>Cox's Bazar</p>			
							</div>
							</div>
						  </div>
							<div class="col-md-6">
							<div class="single-destination relative">
							<div class="thumb relative">	
							<a href="img/elements/syllet.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/syllet.jpg);"></div></a>
							</div>
							<div class="desc">	
							<a href="#" class="price-btn">3000 BDT</a>			
							<h4>TEA GARDEN</h4>
							<p>Syllet</p>			
							</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="single-destination relative">
							<div class="thumb relative">	
							<a href="img/elements/chittagong.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/chittagong.jpg);"></div></a>
						  </div>
							<div class="desc">	
							<a href="#" class="price-btn">3200</a>			
							<h4>PORTLAND</h4>
							<p>Chittagong</p>			
							</div>
							</div>
							</div>

							
						</div>
			 </div>
			 
			<!-- end popular-destination Area -->

						<!-- Start price Area -->
						<section class="price-area section-gap">
						<div class="container">
						<div class="row d-flex justify-content-center">
								<div class="menu-content pb-70 col-lg-8">
										<div class="title text-center">
												<h1 class="mb-10">We Provide Affordable Prices</h1>
												<p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
										</div>
								</div>
								</div>						
						<div class="row">
							<div class="col-lg-4">
								<div class="single-price">
									<h4>Cheap Packages</h4>
									<ul class="price-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Rajshahi</span>
											<a href="#" class="price-btn">2500 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Jessor</span>
											<a href="#" class="price-btn">2700 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Syllet</span>
											<a href="#" class="price-btn">3000 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cox's Bazar</span>
											<a href="#" class="price-btn">3500 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>CHITTAGONG</span>
											<a href="#" class="price-btn">3200 BDT</a>
										</li>	
																							
									</ul>
								</div>
							</div>
		
						<div class="col-lg-4">
								<div class="single-price">
									<h4>Luxury Packages</h4>
									<ul class="price-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Rajshahi</span>
											<a href="#" class="price-btn">3500 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Jessor</span>
											<a href="#" class="price-btn">3700 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Syllet</span>
											<a href="#" class="price-btn">4000 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Cox's Bazar</span>
											<a href="#" class="price-btn">4500 BDT</a>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>CHITTAGONG</span>
											<a href="#" class="price-btn">4200 BDT</a>
										</li>	
																							
									</ul>
								</div>
							</div>
							<div class="col-lg-4">
									<div class="single-price">
										<h4>Camping Packages</h4>
										<ul class="price-list">
											<li class="d-flex justify-content-between align-items-center">
												<span>Rajshahi</span>
												<a href="#" class="price-btn">3000 BDT</a>
											</li>
											<li class="d-flex justify-content-between align-items-center">
												<span>Jessor</span>
												<a href="#" class="price-btn">3200 BDT</a>
											</li>
											<li class="d-flex justify-content-between align-items-center">
												<span>Syllet</span>
												<a href="#" class="price-btn">3500 BDT</a>
											</li>
											<li class="d-flex justify-content-between align-items-center">
												<span>Cox's Bazar</span>
												<a href="#" class="price-btn">4000 BDT</a>
											</li>
											<li class="d-flex justify-content-between align-items-center">
												<span>CHITTAGONG</span>
												<a href="#" class="price-btn">3700 BDT</a>
											</li>	
																								
										</ul>
									</div>
								</div>												
					</div>
				</div>	
			</section>
			<!-- End price Area -->
			

				
			
			 <!-- Start experience-one Area -->
			 <div class="row d-flex justify-content-center" id="experience">
					
							<div class="title text-center">
						  <h1>Experience A Journy Like Never Before </h1>
							<p>Fly with us and find yourself in a world you have only ever imagined.</p>
							</div>
					
				</div>

			<section class="insurence-one-area section-gap" id="first">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 insurence-left">
								<img class="img-fluid img-one" src="img/insurence/1st.jpg" alt="">
							</div>
							<div class="col-lg-6 insurence-right">
							
								<h1>Luaxary Class</h1>
								
								<div class="list-wrap">
									<ul>
										<li>with delicous food</li>
										<li>comfortable chair coach</li>
										<li>entertainment facility</li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</section>
				<!-- End experience-one Area -->
	
				<!-- Start experience-two Area -->
				<section class="insurence-two-area pb-120" id="second">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 insurence-left">
								
								<h1>Business Class</h1>
								
								<div class="list-wrap">
									<ul>
										<li>comfortable chair choach</li>
										<li>food facility</li>
										<li>amazing hospitality</li>
										
									</ul>
								</div>
							</div>
							<div class="col-lg-6 insurence-right">
								<img class="img-fluid img-two" src="img/insurence/2nd.png" alt="">
							</div>						
						</div>
					</div>	
				</section>
				<!-- End experience-two Area -->	
				
				<section class="insurence-one-area section-gap" id="third">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-6 insurence-left">
									<img class="img-fluid img-one" src="img/insurence/3rd.jpg" alt="">
								</div>
								<div class="col-lg-6 insurence-right">
									
									<h1>Economy Class</h1>
									
									<div class="list-wrap">
										<ul>
											<li>chair coach.</li>
											<li>cheap fare</li>
											<li>food facility</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>	
					</section>
					<!-- End experience-third Area -->	
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
					<div class="container">
	
						<div class="row">
							<div class="col-lg-3  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6>About FlyBangla</h6>
									<p>
								  FlyBangla is a domestic airline providing flights with cheap of cost,food facility,amazing hospitality. Enjoy spectacular journy with FlyBangla. 
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6>Navigation Links</h6>
									<div class="row">
										<div class="col">
											<ul>
												<li><a href="#">Home</a></li>
												<li><a href="#">Book</a></li>
												<li><a href="#">Experience</a></li>
												<li><a href="#">Destinations</a></li>
											</ul>
										</div>
										<div class="col">
											<ul>
												<li><a href="#">Login</a></li>
												<li><a href="#">Register</a></li>
												<li><a href="#">Contact</a></li>
											</ul>
										</div>										
									</div>							
								</div>
							</div>							
							<div class="col-lg-3  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h6>Newsletter</h6>
									<p>
										For betterment of FlyBangla please leave your valueable comments .									
									</p>								
									<div id="mc_embed_signup">
										<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
											<div class="input-group d-flex flex-row">
												<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
												<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
											</div>									
											<div class="mt-10 info"></div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-3  col-md-6">									
										<h6>Email:</h6>flybangla@gmail.com <br><br>
										<h6>Contact No:</h6>+880176328784
							</div>						
						</div>
	
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is FlyBangla's official website  <i class="fa fa-heart-o" aria-hidden="true"></i> 
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<div class="col-lg-4 col-sm-12 footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</footer>
				<!-- End footer Area -->	
					

      <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  		<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
    </body>
	</html>	