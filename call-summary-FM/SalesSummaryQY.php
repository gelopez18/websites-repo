<?php
require_once 'connectDb.php';
$wkNumb = 46;
if($_SERVER['REQUEST_METHOD']=='POST'){

}

$sqlQuery = "SELECT SRO, total, client FROM salessummaries WHERE wkNumb='$wkNumb';";
$Result=array();
$Result= $server->query($sqlQuery);
if ($Result->num_rows > 0) {
    echo "
        <br>
        <div class='container'>
        <img class= '' src='Picture2.png'>
        <br>
    Class or Work C = Core, N = National, P = PMA, S = Service Contract
        <table class='table table-striped'>
            <tr>
            <th>Class</th>
            <th>SRO</th>
            <th>SRO Amount less Tax</th>
            <th>Customer Name</th>
            <th>PMT Code</th>
            <th>Partner ID</th>
            <th>Comm%</th>
            <th>Override Type</th>
            <th>Override Rate</th>
            <th>Mgr's Over-Ride Approval</th>
            <th>Split 1 ID</th>
            <th>*% of Total Comm</th>
            <th>Split 2 ID</th>
            <th>*% of Total Comm</th>
            </tr>";
    // output data of each row
    while($row = $Result->fetch_assoc()) {
      echo "<tr>
                <td>C</td>
                <td>".$row["SRO"]."</td>
                <td>\$".$row["total"]."</td>
                <td>".$row["client"]."</td>
                <td>CH</td>
                <td>FPAN004</td>
                <td>46%</td>
                <td></td>
                <td></td>
                <td></td>
                <td>FDEL001</td>
                <td>54%</td>
                <td></td>
                <td></td>
            </tr>";
    }
    echo "</table></div>";
  } else {
    echo "0 results";
  }
 $server->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>