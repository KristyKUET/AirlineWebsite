<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
include("connect.php");

    if($_POST['cardnum'] !="" && $_POST['date'] !="" && $_POST['csc'] !="")
    {
        echo "<h1>payment successful</h1>";
        echo  "<br><h4>Your Journy details at a glance</h4>";
        session_start();
        $p=$_SESSION["pe"];
        $t=$_SESSION["tid"];
       
            $name=$_SESSION["user"];
            $s="UPDATE customer SET tckt_no='$t' WHERE first_name='$name'";
            mysqli_query($conn,$s);

            $sql = "UPDATE ticket SET status ='$p' WHERE tckt_id ='$t'";
            $data = mysqli_query($conn,$sql);
            if($data)
            {
            
               $query = "SELECT * FROM ticket";
               $result = $conn->query($query);
                while($row = $result->fetch_assoc())
                {
                    
                    if($_SESSION["tid"] == $row["tckt_id"])
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
                            <div clas="container">
                            <div class="row">
                            <div class="col-md-4"><h1 class="mb-10" style="color:#00008B">Flight</h1>
                            <h3>FlyBangla airlines</h3>
                            <?php
                            echo "<h4>".$v1."</h4>"."<br>";
                             ?>
                            </div>
                            <div class="col-md-4"><h1 class="mb-10" style="color:#00008B">Depart</h1>
                          
                            <?php
                            echo "<h4>".$v2."</h4>";
                            echo "<h4>".$row1["Depdate"]."</h4>";
                            echo "<h4>".$row1["Deptime"]."</h4>";
                            echo "<h4>".$row["class"]."</h4>";
                            echo "<h4>".$row["fare"]."</h4>";
                            
                            ?>
                            </div>
                            <div class="col-md-4"><h1 class="mb-10" style="color:#00008B">Arrive</h1>
                            
                            <?php
                            echo "<h4>".$v3."</h4>";
                            echo "<h4>".$row1["Depdate"]."</h4>";
                            echo "<h4>".$row1["arritime"]."</h4>";
                           ?>
                            </div>
                            </div>
                            </div>
                         <?php  
                   
                            
                        }       
                    
                    }
            
        }
            }
            else
            {
                echo "not updated";
            }
    }
   else
   {
       echo "<h1>FILL ALL CRITERIA</h1>";
   }
    

?>