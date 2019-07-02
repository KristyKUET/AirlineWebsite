<?php
include("connect.php");
$d =$_GET['x'];
$sql ="DELETE FROM customer WHERE cust_id ='$d'";
$data=mysqli_query($conn,$sql);
if($data)
{
  
    session_start();
    session_unset();
    session_destroy(); 

    echo"<script>alert('Record deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/flybangla.php'"/>  
    <?php
}

    

else
{
    echo "not deleted";
}
?>