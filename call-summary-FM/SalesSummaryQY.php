<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $clientClass = $_POST['ClientClass'];
    $wkNumb=$_POST['wkNumb'];
    setcookie("clientClass", $clientClass);
    setcookie("wkNumb", $clientClass);
}

//$clientClass = 'C';
//$wkNumb=40;
$result_per_page=10;
//QUERIES
$sqlQuery = "SELECT SRO, total, client, clientClass, OverRide, overRidePercent FROM salessummaries WHERE wkNumb='$wkNumb' AND ClientClass='$clientClass';";


//send all the queries to the server. 
$Result= $server->query($sqlQuery);
$TotalofRec = mysqli_num_rows($Result);
//determine the number of pages 
$numb_of_pages = ceil($TotalofRec/$result_per_page);
//determinate what number of page the user is on 
if(!isset($_GET['page']) ){
    $page=1;
    
}else{
    $page = $_GET['page'];   
}

//determinate the results per 
$thisPageFirstResult = ($page-1)*$result_per_page;

$sqlQuery1 = "SELECT SRO, total, client, clientClass, OverRide, overRidePercent FROM salessummaries WHERE wkNumb='$wkNumb' AND clientClass='$clientClass' LIMIT $thisPageFirstResult, $result_per_page;";
$sqlSum = "SELECT SUM(total) FROM salessummaries WHERE wkNumb='$wkNumb' AND ClientClass='$clientClass'LIMIT $thisPageFirstResult, $result_per_page;";
$result=mysqli_query($server, $sqlQuery1);
$total = $server->query($sqlSum);
//results
if ($Result->num_rows > 0) {

    echo "<div class='row'>
        <div class='col'>
        <img class='' src='./img/Picture2.png'>
        </div>
        <div class='col-5'>
            <table >
                <tr id='wkInfo'>
                    <td>
                        Summary ID <b>wk$wkNumb-2022</b>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td >
                    <i>If summary ID number is not provided, one will be assigned to your summary. It is suggested you provide your own unique reference number for easier tracking of your work. Reference numbers will reflect on your statements, therefore avoid repeating.<i>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
            </table>
        </div>
        <div class='col'>
        </div>
        <div class='col-3'>
            <table class='table table-striped'>
                <tr>
                    <th></th>
                    <th colspan='4'>
                    <b>Comment for Corporate<b>
                    </th>
                    <th></th>
                </tr>
            </table>
        </div>
        <div class='col'>
        </div>
        </div>
    Class or Work C = Core, N = National, P = PMA, S = Service Contract
        <table class='table  table-striped'>
            <tr class='borderCSS'>
            <th>Class</th>
            <th>SRO</th>
            <th>SRO Amount less Tax</th>
            <th >Customer Name</th>
            <th>PMT Code</th>
            <th>Partner ID</th>
            <th>Comm%</th>
            <th>Override Type</th>
            <th>Override Rate %</th>
            <th>Mgr's Over-Ride Approval</th>
            <th>Split 1 ID</th>
            <th>*% of Total Comm</th>
            <th>Split 2 ID</th>
            <th>*% of Total Comm</th>
            </tr>";
    // output data of each row
while($row = mysqli_fetch_array($result)){
    echo "<tr>
    <td class='borderCSS'>".$row["clientClass"]."</td>
    <td class='borderCSS'>".$row["SRO"]."</td>
    <td class='borderCSS' id='centerT'>\$".$row["total"]."</td>
    <td style='width: 25%; white-space:nowrap;' class='borderCSS'>".$row["client"]."</td>
    <td class='borderCSS' id='centerT'>CH</td>
    <td class='borderCSS'>FPAN004</td>
    <td class='borderCSS'>46%</td>
    <td class='borderCSS' id='centerT'>".$row["OverRide"]."</td>
    <td class='borderCSS' id='centerT'>".$row["overRidePercent"]."</td>
    <td class='borderCSS'></td>
    <td class='borderCSS'>FDEL001</td>
    <td class='borderCSS'>54%</td>
    <td class='borderCSS'></td>
    <td class='borderCSS'></td>
</tr>"
;
}echo "</table>";
} else {
    echo "0 results";
  }
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
        #centerT{
            text-align: center;
        }
        .borderCSS{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
  </head>
  <body>
 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php
        $Trry=[];
        $sroQuery="SELECT total FROM salessummaries WHERE wkNumb='$wkNumb' AND ClientClass='$clientClass' LIMIT $thisPageFirstResult, $result_per_page;";
        $TT=mysqli_query($server, $sroQuery);
    
            while($row=mysqli_fetch_array($TT)){
                array_push($Trry, $row[0]);
        }
        echo "</table >
    <table class='table'>
            <tr>
            <td colspan='2'>Total</td>
            <td><b>\$".array_sum($Trry)."</b></td>
            <td></td>
            <td colspan='4'><b>Preparer's Signature</b></td>
            <td></td>
            <td></td>
            <td colspan='4'><b>Date</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan='2'></td>
            <td></td>
            <td><b></b></td>
            <td colspan='4'><b>Product Managers Approval</b></td>
            <td></td>
            <td></td>           
            <td colspan='4'><b>Date</b></td>
            <td></td>
            <td ></td>
            <td></td> 
        </tr>
    </table>
    <b>*Split 1 and 2 represents % of partner's total commission, not percentage of value of job</b></div>
    ";
 $server->close();
?>

    <br><br>
  
    <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

                <?php
                //set the number of pages 
    for($page=1; $page<=$numb_of_pages; $page++){
        echo "<li class='page-item'><a class='page-link' href='SalesSummaryQY.php?page=$page&wkNumb=$wkNumb&clientClass=$clientClass'>$page</a></li>";
    }
    ?>
                </li>
            </ul>
    </nav>

  </body>
</html>