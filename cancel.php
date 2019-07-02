<?php
 include("connect.php");
 $t=$_GET['t'];
 session_start();

 $query ="UPDATE ticket SET status +='1' WHERE tckt_id='$t'";
 mysqli_query($conn, $query);
 echo "<h1>Booking Canceled</h1>";
   
?>