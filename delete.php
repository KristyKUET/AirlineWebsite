<?php
include("connect.php");
$sch =$_GET['s'];
$sql ="DELETE FROM schedule WHERE sch_id ='$sch'";
$data=mysqli_query($conn,$sql);
if($data)
{
    echo"<script>alert('Record deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/admin_controls.php'" />  
    <?php
}
else
{
    echo "not deleted";
}
?>