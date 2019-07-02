<?php
include("connect.php");
$fn=$_POST['first_name'];
$ln=$_POST['last_name'];
$n=$_POST['nationality'];
$r=$_POST['address'];
$c=$_POST['city'];
$con=$_POST['country'];
$e=$_POST['email'];
$p=$_POST['password'];
$t=$_POST['phone'];


$sql = "INSERT INTO  customer(first_name,last_name,nationality,address,city,country,phone,email,password)   VALUES ('$fn','$ln','$n','$r','$c','$con','$t','$e','$p')";



if ($conn->query($sql) === TRUE) 
{
    echo"<script>alert('Record Updated')</script>";
    ?>
    <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/flybangla.php'"/>  
    <?php
} 
else 
{
    echo "Error creating table: " . $conn->error;
}
?>