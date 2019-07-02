<?php
session_start();
include("connect.php");
error_reporting(0);

$flag=0;
$e=$_POST['email'];
$p=$_POST['password'];

$sql = "SELECT first_name,email, password FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc())
     {
        if($row["email"]== $e && $row["password"]==$p)
        {
            $flag=1;
             $_SESSION["user"] = $row["first_name"]; 
             echo $_SESSION["user"];
             header("location:flybangla.php");  
        }
    }
if($flag==0)
{
    echo "please enter correct email and password";
}

} 
?>