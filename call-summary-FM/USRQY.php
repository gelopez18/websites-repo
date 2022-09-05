
<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $clientClass = $_POST['ClientClass'];
    $wkNumb=$_POST['wkNumb'];
}

$sqlQuery = "SELECT SRO, total, client, clientClass, Comment, month, day, year FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass' LIMIT 10;";

$sqlSum="SELECT SUM(total) FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass';";

$Result=array();
$Result=$server->query($sqlQuery);
$total=$server->query($sqlSum);
if ($Result->num_rows > 0) {

  echo "
      <br>
      <div class=''>
      <div class='row'>
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
                  <td class=>
                    <h5>The following list are USR for the listed Week above.<h5>
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
      <table class='table table-danger table-striped'>
          <tr>
          <th>Date</th>
          <th>Class</th>
          <th>SRO</th>
          <th>SRO Amount less Tax</th>
          <th>Customer Name</th>
          <th>Comment</th>
          <th>FO</th>
          </tr>";
  // output data of each row
  
  while($row = $Result->fetch_assoc()) {

    echo "<tr>
              <td>".$row["month"]."/".$row["day"]."/".$row["year"]."</td>
              <td>".$row["clientClass"]."</td>
              <td>".$row["SRO"]."</td>
              <td>\$".$row["total"]."</td>
              <td >".$row["client"]."</td>
              <td>".$row["Comment"]."</td>
              <td>FPAN004</td>
 
          </tr>";
  }

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
    </style>
  </head>
  <body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  </body>
</html>