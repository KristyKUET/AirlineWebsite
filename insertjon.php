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
		<title>login</title>

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
                    <div class="section-top-border">
                        <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <h3 class="mb-30">Journey</h3>
                            <form action="" method="GET">
                            
                            <div class="mt-10">
                            <h4>Journey ID:</h4><br>    
                            <input type="text" name="journ_id" placeholder="Journy Id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Journy Id'" required class="single-input">
                            </div><br>
                            <div class="mt-10">
                            <h4>Source:</h4><br>      
                            <input type="text" name="src" placeholder="Source" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Source'" required class="single-input">
                            </div>
                            <div class="mt-10">
                            <h4>Destinsation:</h4><br>      
                            <input type="text" name="dest" placeholder="Destination" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Destination'" required class="single-input">
                            </div>
                            <div class="mt-10">
                            <h4>Flight NO:</h4><br>      
                            <input type="text" name="flight_no" placeholder="Flight No" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Flight NO'" required class="single-input">
                            </div>
                            <br>
                            <div><input type="submit" name ="submit" value="submit"/></div>
                             <br>
                            </div>
                            </form>

                        </div>
                        </div>
                </div>
                <?php
               if($_GET["submit"])
               {
                 
                $j = $_GET['journ_id'];
                $s = $_GET['src'];
                $d = $_GET['dest'];
                $f = $_GET['flight_no'];
                if($j !="" && $s !="" && $d !="" && $f !="")
                {
                    $sql = "INSERT INTO  journy(journ_id,src,dest,flight_no)   VALUES ('$j','$s','$d','$f')";
                    $result = mysqli_query($conn,$sql);
                    if ($result)
                    {
                                            
                        echo "<script>alert('Record Instered')</script>";
                        ?>
                        <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/admin_controls.php'" />  
                        <?php
                    }         
                }
                else
                {
                    echo "fill all criteria";
                }

               }    
                ?>
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
                    
