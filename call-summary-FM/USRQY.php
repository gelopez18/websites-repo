
<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $clientClass = $_POST['ClientClass'];
    $wkNumb=$_POST['wkNumb'];
}

$sqlQuery = "SELECT SRO, total, client, clientClass FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass' LIMIT 10;";

$sqlSum="SELECT SUM(total) FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass';";

$results=array();
$results=$server->query($sqlQuery);
$total=$server->query($sqlSum);

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