<?php
include("connect.php");
error_reporting(0);
$_GET['x'];
$_GET['f'];
$_GET['l'];
$_GET['n'];
$_GET['a'];
$_GET['c'];
$_GET['con'];
$_GET['p'];
$_GET['e'];
$_GET['pass'];

?>
<html>
<style>
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
input[type=text] {
    box-sizing: border-box;
  border: none;
  border-bottom: 2px solid white;

}
</style>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container emp-profile">
            <form   action="" method="GET">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h5>
                            <?php echo $_GET['f']." ".$_GET['l'];?>
                        </h5>
                        
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                            <div class="col-md-6">
                                            <label>Customer Id</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="cust_id" required class="single-input" value="<?php echo $_GET['x']; ?>">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="first_name" required class="single-input" value="<?php echo $_GET['f']; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="last_name" required class="single-input" value="<?php echo  $_GET['l'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="nationality" required class="single-input" value="<?php echo  $_GET['n'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $_GET['a'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="city" required class="single-input" value="<?php echo  $_GET['c'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="country" required class="single-input" value="<?php echo  $_GET['con'];?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="email" required class="single-input" value="<?php echo  $_GET['e'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="password" required class="single-input" value="<?php echo  $_GET['pass'];?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="phone" required class="single-input" value="<?php echo   $_GET['p'];?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                            <input type="submit" name ="submit" value="submit"/>                                            
                                           </div>
                                        </div>
                                        
                                </div>
                           
                        </div>
                    </div>
                </div>
            </form> 

</body>
</html>
<?php
if($_GET['submit'])
{
    $x=$_GET["cust_id"];
    $f=$_GET["first_name"];
    $l=$_GET["last_name"];
    $n=$_GET["nationality"];
    $a=$_GET["address"];
    $c=$_GET["city"];
    $con=$_GET["country"];
    $p=$_GET["phone"];
    $e=$_GET["email"];
    $pass=$_GET["password"];
    
    $sql="UPDATE customer SET first_name='$f',last_name='$l',nationality='$n',address='$a',city='$c',country='$con',phone='$p',email='$e',password='$pass' WHERE cust_id='$x'";
    $data = mysqli_query($conn,$sql);
    if($data)
    {
        
        echo"<script>alert('Record Updated')</script>";
        ?>
        <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/flybangla.php'"/>  
        <?php
    }
    
    else
    {
        echo "not updated";
    }
}

?>