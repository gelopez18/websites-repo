<?php
require_once './includes/headers.php';
require_once './includes/connectDB.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $clientClass = $_GET['ClientClass'];
    $wkNumb=$_GET['wkNumb'];
}

$sqlQuery = "SELECT SRO, total, client, clientClass, Comment, month, day, year FROM usr WHERE wkNumb='$wkNumb' AND clientClass='$clientClass';";

$Result=array();
$Result=mysqli_query($server, $sqlQuery);

while($row = $Result->fetch_assoc()) {

}
