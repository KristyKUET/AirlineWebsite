<!DOCTYPE html>
<html lang="zxx" class="no-js"s>
  <style>
#back 
{
  background-image: url("3067658-poster-p-1-six-ways-i-built-a-career-traveling-the-world-in-my-20s.webp");
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
                    <li><a href="flybangla.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    
                    
                      <li><a href="reg.php">Register</a></li>
                              
                                                                                    
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </nav>		      		  
              </div>
          </div>
      </header> 
      
      <br><br><br><br><br><br><br><br><br>





<?php
include("connect.php");
error_reporting(0);
if($_POST['from']!="" && $_POST['to'] && $_POST['depdate'] !="" && $_POST['class']!="" && $_POST['passenger']!="")
{
  session_start();
  if($_SESSION["user"])
{
  $f=$_POST['from'];
  $t=$_POST['to'];
  $d=$_POST['depdate'];
  $c=$_POST['class'];
  $p=$_POST['passenger'];
  session_start();
  $_SESSION["class"] = $c;
  $_SESSION["passenger"] = $p;
  $sql = "SELECT * FROM book";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) 
  {
      
      while($row = $result->fetch_assoc())
       {
          if($row["src"]== $f && $row["dest"]==$t && $row["depdate"]==$d )
          {
              // echo $row["journ_id"];
               $_SESSION["j"]=$row["journ_id"];
               break;  
          }
      }
  
  }
}
else
{
  
  echo "<script>alert('Please Login First')</script>";
  ?>
  <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/flybangla.php'" />  
  <?php
}
}
else
{
  echo "<script>alert('fill up all criteria')</script>";
  ?>
  <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/flybangla.php'" />  
  <?php
}


?>


<div class="container">
<h1 class="mb-10" style="color:	#00008B">Schedule</h1>
         
  <table class="table table-hover"style="text-color:white">
    <thead>
      <tr>
      <th>Depature Date</th>
        <th>Depature Time</th>
        <th>Arrival Time</th>
      </tr>
    </thead>
    <tbody>

<?php
$sql = "SELECT * FROM schedule";
$query = $conn->query($sql);
if ($query->num_rows > 0) 
{
    
    while($row = $query->fetch_assoc())
     {
        if($row["journ_id"] == $_SESSION["j"])
        {
            echo"<tr>
            <td><b>" . $row["Depdate"]."</b></td> 
            <td><b>" .$row["Deptime"]."</b></td>
            <td><b>" .$row["arritime"]. "</b></td>
                        
            </tr>";
           
        }
    }

}
?>
</tbody>
  </table>
</div>

<div style="padding:150px">
<h2 class="mb-10" style="color:	#00008B">Fill Up Forms According To Your Choice</h2>	<br><br>		
<div class="row" >

<div class="col-lg-4 col-md-4">

	  
  <form action="book2.php" method="post"  style="background-color:#FDF5E6;padding:25px">
    <div class="form-group">
      <label> Departure Date:</label>
      <input type="text" class="form-control"  placeholder="Enter Departure Datel" name="depdate">
    </div>
    <div class="form-group">
      <label>Departure Time:</label>
      <input type="text" class="form-control"  placeholder="Enter Departure Time" name="deptime">
    </div>
    <input type="submit" value="Submit">    
  </form>
</div>
</div>
</div>
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
