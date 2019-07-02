<?php
include("connect.php");
error_reporting(0);

$_GET['j'];
$_GET['s'];
$_GET['d'];
$_GET['f'];

?>
<html>
<body>
<div class="section-top-border">
<div class="row">
<div class="col-lg-8 col-md-8">
    <h3 class="mb-30">Journey</h3>
    <form action="" method="GET">
    <div class="mt-10">
    <h4>Journey ID:</h4><br>    
    <input type="text" name="journ_id" value ="<?php echo $_GET['j']; ?>">
    </div><br>
    <div class="mt-10">
    <h4>Source:</h4><br>      
    <input type="text" name="src" value ="<?php echo $_GET['s']; ?>">
    </div>
    <div class="mt-10">
    <h4>Destination:</h4><br>      
    <input type="text" name="dest" value ="<?php echo $_GET['d']; ?>">
    </div>
    <div class="mt-10">
    <h4>Flight No:</h4><br>      
    <input type="text" name="flight_no" value ="<?php echo $_GET['f']; ?>">
    </div>
    <br>
    <div><input type="submit" name ="submit" value="submit"/></div>    
    <br>
    </div>
    </form>

</div>
</div>
</div>
</body>
</html>
<?php
if($_GET['submit'])
{
    
    $j = $_GET['journ_id'];
    $s = $_GET['src'];
    $d = $_GET['dest'];
    $f = $_GET['flight_no'];
    $sql="UPDATE journy SET src='$s',dest='$d',flight_no='$f' WHERE journ_id='$j'";
    $data = mysqli_query($conn,$sql);
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        ?>
        <meta http-equiv="refresh" content="0;URL='http://localhost/PROJECT/admin_controls.php'" />  
        <?php
    }
    else
    {
        echo "not updated";
    }
}

?>