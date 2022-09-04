
<?php
require_once 'headers.php';
require_once 'connectDB.php';

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

