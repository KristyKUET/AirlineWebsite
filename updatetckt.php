<?php
include("connect.php");
error_reporting(0);
$_GET['t'];
$_GET['j'];
$_GET['sch'];
$_GET['c'];
$_GET['f'];
$_GET['s'];
?>
<html>
<body>
<div class="section-top-border">
<div class="row">
<div class="col-lg-8 col-md-8">
    <h3 class="mb-30">Ticket</h3>
    <form action="" method="GET">
    <div class="mt-10">
    <h4>Ticket ID:</h4><br>    
    <input type="text" name="tckt_id" value ="<?php echo $_GET['t']; ?>">
    </div><br>
    <div class="mt-10">
    <h4>Journey ID:</h4><br>    
    <input type="text" name="journ_id" value ="<?php echo $_GET['j']; ?>">
    </div><br>
    <div class="mt-10">
    <h4>Schedule Id:</h4><br>      
    <input type="text" name="sch_id" value ="<?php echo $_GET['sch']; ?>">
    </div>
    <div class="mt-10">
    <h4>Class:</h4><br>      
    <input type="text" name="class" value ="<?php echo $_GET['c']; ?>">
    </div>
    <div class="mt-10">
    <h4>Fare:</h4><br>      
    <input type="text" name="fare" value ="<?php echo $_GET['f']; ?>">
    </div>
    <br>
    <div class="mt-10">
    <h4>Status:</h4><br>      
    <input type="text" name="status" value ="<?php echo $_GET['s']; ?>">
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
    $t = $_GET['tckt_id'];
    $j = $_GET['journ_id'];
    $sch = $_GET['sch_id'];
    $c = $_GET['class'];
    $f = $_GET['fare'];
    $s = $_GET['status'];
    $sql="UPDATE ticket SET journ_id='$j',sch_id='$sch',class='$c',fare='$f',status='$s' WHERE tckt_id='$t'";
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