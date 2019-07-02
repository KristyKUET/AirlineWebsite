<?php
include("connect.php");
error_reporting(0);
?>
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
		<title>admin controls</title>

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

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            
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
                              
                                <a href="index.html"><img src="img/airlogo.png" width='80px' height="50px" alt="" title="" /></a>
                              
                              <nav id="nav-menu-container">
                                <ul class="nav-menu">
                                  <li><a href="flybangla.php">Home</a></li>
                                  <li><a href="about.php">About</a></li>
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
                                    <li><a href="adminlogin.php">Login</a></li>
                                    <li><a href="adminlogout.php">Logout</a></li>

                                                                                                  
                                  <li><a href="contact.html">Contact</a></li>
                                </ul>
                              </nav><!-- #nav-menu-container -->					      		  
                            </div>
                        </div>
                    </header>

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

            <div class="container">
            <h1 class="mb-10" style="color:	#00008B">Schedule</h2> 
            <?php
            include("connect.php");
            $query = "SELECT * FROM schedule";
            $data=mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);

            if($total !=0)
            {
            ?>
                   
            <table class="table table-hover">
                <thead>
                <tr>
                <th>sch_id</th>
                <th>journ_id</th>
                <th>Depdate</th>
                <th>Deptime</th>
                <th>arritime</th>
                <th colspan="2">operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($data))
                {
                    echo"<tr>
                    <td>" .$row['sch_id']."</td> 
                    <td>" .$row['journ_id']."</td>
                    <td>" .$row['Depdate']. "</td>
                    <td>" .$row['Deptime']."</td>
                    <td>" .$row['arritime']."</td>
                    <td><a href='insertsch.php'>Insert</a></td> 
                    <td><a href='updatesch.php?s=$row[sch_id]&j=$row[journ_id]&d=$row[Depdate]&t=$row[Deptime]&a=$row[arritime]'>Update</a></td>
                    <td><a href='delete.php?s=$row[sch_id]'>Delete</a>
                    
                    </tr>";
                
                }
                }
                
                ?>
                
            </tbody>
            </table>
            </div>

            <!--journey-->    
            <div class="container">
            <h1 class="mb-10" style="color:	#00008B">Journey</h2> 
            <?php
            include("connect.php");
            $query = "SELECT * FROM journy";
            $data=mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);

            if($total !=0)
            {
            ?>
                   
            <table class="table table-hover">
                <thead>
                <tr>
                <th>journ_id</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Flight No</th>
                <th colspan="2">operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_assoc($data))
                {
                    echo"<tr>
                    
                    <td>" .$row['journ_id']."</td>
                    <td>" .$row['src']. "</td>
                    <td>" .$row['dest']."</td>
                    <td>" .$row['flight_no']."</td>
                    <td><a href='insertjon.php'>Insert</a></td> 
                    <td><a href='updatejon.php?j=$row[journ_id]&s=$row[src]&d=$row[dest]&f=$row[flight_no]'>Update</a></td>
                    <td><a href='deletejon.php?j=$row[journ_id]'>Delete</a>
                    </tr>";
                
                }
                }
                
                ?>
            </tbody>
            </table>
            </div>

              
            <!--book-->
               
            <div class="container">
            <h1 class="mb-10" style="color:	#00008B">Book</h2> 
            <?php
            include("connect.php");
            $query = "SELECT * FROM book";
            $data=mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);

            if($total !=0)
            {
            ?>
                   
            <table class="table table-hover">
                <thead>
                <tr>
                <th>journ_id</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th colspan="2">operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
               while($row = mysqli_fetch_assoc($data))
               {
                   echo"<tr>
                   
                   <td>" .$row['journ_id']."</td>
                   <td>" .$row['src']. "</td>
                   <td>" .$row['dest']."</td>
                   <td>" .$row['depdate']."</td>
                   <td><a href='insertboo.php'>Insert</a></td> 
                   <td><a href='updateboo.php?j=$row[journ_id]&s=$row[src]&d=$row[dest]&x=$row[depdate]'>Update</a></td>
                   <td><a href='deleteboo.php?j=$row[journ_id]'>Delete</a>
                   </tr>";
               
               }
               }
            ?>
            </tbody>
            </table>
            </div>
            
             
            <!--ticket-->  
            <div class="container">
            <h1 class="mb-10" style="color:	#00008B">Ticket</h2> 
            
            <?php
            include("connect.php");
            $query = "SELECT * FROM ticket";
            $data=mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);

            if($total !=0)
            {
            ?>
                   
            <table class="table table-hover">
                <thead>
                <tr>
                <th>journ_id</th>
                <th>sch_id</th>
                <th>Class</th>
                <th>Fare</th>
                <th>Status</th>
                <th colspan="2">operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
              while($row = mysqli_fetch_assoc($data))
              {
                  echo"<tr>
                  
                  <td>" .$row['journ_id']."</td>
                  <td>" .$row['sch_id']. "</td>
                  <td>" .$row['class']."</td>
                  <td>" .$row['fare']."</td>
                  <td>" .$row['status']."</td>
                  <td><a href='inserttckt.php'>Insert</a></td> 
                  <td><a href='updatetckt.php?t=$row[tckt_id]&j=$row[journ_id]&sch=$row[sch_id]&c=$row[class]&f=$row[fare]&s=$row[status]'>Update</a></td>
                  <td><a href='deletetckt.php?t=$row[tckt_id]'>Delete</a>
                  </tr>";
              
              }
              }
              
            ?>
            </tbody>
            </table>
            </div>
            
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
           