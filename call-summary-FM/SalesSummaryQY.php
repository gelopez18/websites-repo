<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $clientClass = $_POST['ClientClass'];
    $wkNumb=$_POST['wkNumb'];
}
$result_per_page=10;
//QUERIES

$sqlQuery = "SELECT SRO, total, client, clientClass, OverRide, overRidePercent FROM salessummaries WHERE wkNumb='40' AND clientClass='C';";//REMEMBER TO CHANGE BACK TO THE VARIABLE
$sqlSum = "SELECT SUM(total) FROM salessummaries WHERE wkNumb='$wkNumb' AND ClientClass='$clientClass';";

//send all the queries to the server. 
$total = $server->query($sqlSum);
$Result=array();
$Result= $server->query($sqlQuery);
$TotalofRec = mysqli_num_rows($Result);
//determine the number of pages 
$numb_of_pages = ceil($TotalofRec/$result_per_page);
//determinate what number of page the user is on 
if(!isset($_GET['page'])){
    $page=1;
}else{
    $page = $_GET['page'];
}
//determinate the results per page - page1 1-10, page2 11-20, page3 21-30
$thisPageFirstResult = ($page-1)*$result_per_page;
echo $thisPageFirstResult ;
//results
echo "<table>";
while($row = mysqli_fetch_array($Result)){
    echo "<tr>
    <td>".$row["clientClass"]."</td>
    <td>".$row["SRO"]."</td>
    <td>\$".$row["total"]."</td>
    <td >".$row["client"]."</td>
    <td>CH</td>
    <td>FPAN004</td>
    <td>46%</td>
    <td>".$row["OverRide"]."</td>
    <td>".$row["overRidePercent"]."</td>
    <td></td>
    <td>FDEL001</td>
    <td>54%</td>
    <td></td>
    <td></td>
</tr>";
}
echo "</table>";





 $server->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        #wkInfo{
            border-collapse: collapse;
        }
    </style>
  </head>
  <body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <br><br>
  
    <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <?php
                //set the number of pages 
    for($page=1; $page<=$numb_of_pages; $page++){
        echo "<li class='page-item'><a class='page-link' href='salessummaryQY.php?page=$page'>$page</a></li>";
    }
    ?>
                </li>
            </ul>
    </nav>

  </body>
</html>