<?php

$flag=0;
$name=$_POST['email'];
$pass=$_POST['password'];
if(($name=='rifat@gmail.com'&& $pass=='123')||($name=='mimma@gmail.com'&& $pass=='123')||($name=='nira@gmail.com'&& $pass=='123')||($name=='nipa@gmail.com'&& $pass=='123'))
{
	echo"<h1>welcome</h1>";
	echo $name;
	echo"<br>";
    echo $pass;
    
if(!empty($_POST['remember']))
{
	setcookie('cookie_name',$name,time()+86400*30);
    echo"Cookie is set";
    $flag=1;
}
}
if($flag==0)
{
	echo"<br>Cookie is not set";
}
?>



