<?php
if (isset($_COOKIE['cookie_name'])) {
    header("location:admin_controls.php");
}
else
{

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<style>
#back 
{
  background-image: url("travel-industry-air.jpg");
  opacity:1;
   /* Full height */
   height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}       
</style>

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
		<title>adminlogin</title>

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
		<body id="back">
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
                              
                                <a href="index.html"><img src="img/airlogo.png" width='80px' height="50px" alt="" title="" /></a>
                              
                              <nav id="nav-menu-container">
                                <ul class="nav-menu">
                                  <li><a href="FlyBangla.html">Home</a></li>
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
                                            <li><a href="contact.html">Register</a></li>
                                            <li><a href="adminlogin.html">Login</a></li>
                                                                                                  
                                  <li><a href="contact.html">Contact</a></li>
                                </ul>
                              </nav><!-- #nav-menu-container -->					      		  
                            </div>
                        </div>
                    </header>	
         
                    <br><br><br><br><br><br><br>
            <!-- login -->
   
                <div style="padding:100px">
                        <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <h3 class="mb-30">Admin Login</h3>
                            <form action="adminlogin_back.php" method="post">
                            <div class="mt-10">
                            <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                            </div>
                            <div class="mt-10">
                            <button type="submit">Login</button>
                            </div>
                            <div class="mt-10">
                             <div class="switch-wrap d-flex justify-content-between">
                                    <b>remember me</b>
                                    <div class="primary-checkbox">
                                        <input type="checkbox" id="default-checkbox" checked="checked" name="remember" >
                                        <label for="default-checkbox"></label>
                                    </div>
                            </div>
                            </div>
                            <br>
                            <span><b>Forgot</b><a href="#">password?</a></span>
                             </form>
                        </div>
                        </div>
                </div>         
s

            

            
            
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
<?php
}
?>