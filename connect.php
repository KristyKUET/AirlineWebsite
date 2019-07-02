<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
{
    echo "";
}
else
{
    die("connection not created".mysqli_connect_error()) ;
}
?>