<?php
include("connect.php");
$name=$_GET['n'];
$query = "SELECT * FROM customer WHERE first_name='$name' ";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
    
while($row = mysqli_fetch_assoc($data))
{
$i= $row["cust_id"];
$f= $row["first_name"];
$l=  $row["last_name"];
$n= $row["nationality"];
$a= $row["address"];
$c= $row["city"];
$con=$row["country"];
$p=$row["phone"];
$e=$row["email"];
$pass= $row["password"];
$t=$row["tckt_no"];

}        
}
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
            <form  action="reg_back.php" method="post" >
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h5>
                            <?php echo $f." ".$l;?>
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
                    <div class="col-md-4">
                    <?php
                    echo"<b><a href='editpro.php?x=$i&f=$f&l=$l&n=$n&a=$a&c=$c&con=con&p=$p&e=$e&pass=$pass'>Edit Profile</a></b>";
                    echo"<br><b><a href='deletepro.php?x=$i'>Delete Account</a></b>";   
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $f;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $l;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="nationality" required class="single-input" value="<?php echo  $n;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $a;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $c;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $con;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $f;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $pass;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="address" required class="single-input" value="<?php echo  $p;?>">
                                            </div>
                                        </div>
                                        
                    </div>
                           
                        </div>
                    </div>
                </div>
            </form> 
            <?php
	if($t!="")
	{
		?>
		<div>
            <br>
		<h3 class="mb-30">Journey Details</h3><br><br>
		<?php
		$sql= "SELECT * FROM ticket WHERE tckt_id='$t'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			
				$j=$row['journ_id'];
				$s=$row['sch_id'];
				
				
				$sql = "SELECT src,dest,flight_no FROM journy WHERE journ_id ='$j'";
				$res = $conn->query($sql);
				while($row1 = $res->fetch_assoc())
				{
				   
					$v1=$row1["flight_no"];
					$v2=$row1["src"];
					$v3=$row1["dest"];

				  
				}  
				
				$sql = "SELECT Depdate,Deptime,arritime FROM schedule WHERE sch_id ='$s'";
				$res = $conn->query($sql);
				while($row1 = $res->fetch_assoc())
				{
				?>
				<div class="container">
				<table class="table table-condensed table-bordered">
				<tr>
				<th>Flight No</th>
				<th>From</th>
				<th>TO</th>
				<th>Depart Date</th>
				<th>Depart Time</th>
				<th>Class</th>
				<th colspan="2">Cancelation Date</th>
				</tr>
				<?php
				$d=$row1['Depdate'];
				$date=date_create("$d");
				date_add($date,date_interval_create_from_date_string("2 days"));
				echo"<tr>
				<td>".$v1."</td> 
				<td>".$v2."</td>
				<td>".$v3."</td>
				<td>".$row1['Depdate']. "</td>
				<td>".$row1['Deptime']."</td>
				<td>".$row['class']."</td>";
				echo "<td>".date_format($date,"Y-m-d")."</td>";
				echo "<td><a href='cancel.php?t=$t'>Cancel</a></td>".
				
				
				"</tr>";
				}?>  
		  
		</div>
	<?php
	}
}	?>          
        </div>
</body>
</html>    