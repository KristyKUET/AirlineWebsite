<?php
include("connect.php");
error_reporting(0);
$_GET['s'];
$_GET['j'];
$_GET['d'];
$_GET['t'];
$_GET['a'];

?>
<html>
<body>
<div class="section-top-border">
<div class="row">
<div class="col-lg-8 col-md-8">
    <h3 class="mb-30">Schedule</h3>
    <form action="" method="GET">
    <div class="mt-10">
    <h4>Schedule ID:</h4><br>    
    <input type="text" name="sch_id" value ="<?php echo $_GET['s']; ?>">
    </div><br>
    <div class="mt-10">
    <h4>Journey ID:</h4><br>    
    <input type="text" name="journ_id" value ="<?php echo $_GET['j']; ?>">
    </div><br>
    <div class="mt-10">
    <h4>Departure Date:</h4><br>      
    <input type="text" name="depdate" value ="<?php echo $_GET['d']; ?>">
    </div>
    <div class="mt-10">
    <h4>Departure Time:</h4><br>      
    <input type="text" name="deptime" value ="<?php echo $_GET['t']; ?>">
    </div>
    <div class="mt-10">
    <h4>Arrival Time:</h4><br>      
    <input type="text" name="arritime" value ="<?php echo $_GET['a']; ?>">
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
    $s = $_GET['sch_id'];
    $j = $_GET['journ_id'];
    $d = $_GET['depdate'];
    $t = $_GET['deptime'];
    $a = $_GET['arritime'];
    $sql="UPDATE schedule SET journ_id='$j',Depdate='$d',Deptime='$t',arritime='$a' WHERE sch_id ='$s'";
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