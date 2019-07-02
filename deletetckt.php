<?php
include("connect.php");
$tckt =$_GET['t'];
$sql ="DELETE FROM ticket WHERE tckt_id ='$tckt'";
$data=mysqli_query($conn,$sql);
if($data)
{
    echo"<script>alert('Record deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/admin_controls.php'"/>  
    <?php
}
else
{
    echo "not deleted";
}
?>