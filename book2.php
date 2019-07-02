<!DOCTYPE html>
<html lang="en">
<style>
#back 
{
  background-image: url("Airplane.jpg");
  opacity:1;
   /* Full height */
   height: 50%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}       
</style>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body id="back">
<?php
include("connect.php");
session_start();
$d=$_POST['depdate'];
$t=$_POST['deptime'];
$flag=0;
$sql = "SELECT * FROM schedule";
$query = $conn->query($sql);
if ($query->num_rows > 0) 
{ 
    while($row = $query->fetch_assoc())
     {
        if($row["Depdate"] == $d && $row["Deptime"] == $t)
        {
            $_SESSION["sch"]= $row["sch_id"];  
            
        }
    }
}

$sql = "SELECT * FROM ticket";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 

    while($row = $result->fetch_assoc())
     {

        
        if($row["sch_id"] ==$_SESSION["sch"] && $row["class"]==$_SESSION["class"] && $row["status"] >= $_SESSION["passenger"])
        {
            $flag=1;
            $t=$row["tckt_id"];
        ?>
        <div class="container">
        <h1 class="mb-10" style="color:	#00008B">Payment</h1>
         <?php
            echo "<h2>". $row["fare"] * $_SESSION["passenger"]. "tk</h2><br>"; 
            $x= $row["status"] -  $_SESSION["passenger"];
            
            $_SESSION["pe"] = $x;
            $_SESSION["tid"] = $row["tckt_id"];
            
          
        }
            
        }
        if($flag==0)
        {
          echo"<h1>ticket not available</h1>";
        }
        else
        {
          ?>
    </div>
   
    <div style="padding:70px">
				<div class="row" >
				<div class="col-lg-6 col-md-6">
      <h4>Enter your card information then click  "Process Payment" to complete booking process</h4><br><br>
      <form class="form-horizontal" action="ticket.php" method ="POST" style="background-color:#FDF5E6;padding:20px">
        <div class="form-group">
          <label class="control-label col-sm-2">Card Number:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="" name="cardnum">
          </div>
        </div>
        
        
        <div class="form-group">
        <label class="control-label col-sm-2">Card Type:</label>
          <div class="row">
          <div class= "col-sm-2"><img src="master.jpg"  width="100" height="50"></div>
          <div class= "col-sm-2"><img src="visa.png"  width="100" height="50"></div>
          <div class= "col-sm-2"><img src="america.png"  width="100" height="50"></div>
                  
          
          </div>
          </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" >Expiry Date:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control"  placeholder="" name="date">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" >CSC:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control"  placeholder="" name="csc">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
    </div>
        </div>
    </body>
    </html>
<?php
 }

       
}
?>


