<?php
include("connect.php");
$jon =$_GET['j'];
$sql ="DELETE FROM journy WHERE journ_id ='$jon'";
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