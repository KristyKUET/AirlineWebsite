<html>
<head>
<link rel="stylesheet" tyep="text/css" href="css/bootstrap.min.css">
</head>
<body style= "padding-top:10px">



<?php
include("connect.php");
$query = "SELECT * FROM schedule";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>
<div class="container">
<table class="table table-condensed table-bordered">
<tr>
<th>sch_id</th>
<th>journ_id</th>
<th>Depdate</th>
<th>Deptime</th>
<th>arritime</th>
<th colspan="2">operations</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($data))
{
    echo"<tr>
    <td>" .$row['sch_id']."</td> 
    <td>" .$row['journ_id']."</td>
    <td>" .$row['Depdate']. "</td>
    <td>" .$row['Deptime']."</td>
    <td>" .$row['arritime']."</td>
    <td><a href='insertsch.php'>Insert</a></td> 
    <td><a href='updatesch.php?s=$row[sch_id]&j=$row[journ_id]&d=$row[Depdate]&t=$row[Deptime]&a=$row[arritime]'>Update</a></td>
    <td><a href='delete.php?s=$row[sch_id]'>Delete</a>
    
    </tr>";
  
}
}
   
?>
</table>
</div>
</body>
</html>
