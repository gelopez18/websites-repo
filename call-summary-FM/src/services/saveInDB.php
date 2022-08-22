<?php
  $fmdb_hostname='localhost';
  $fmdb_db='userpractice';  
  $fmdb_username= 'fpan004';
  $fmdb_password='22443';
$server =  mysqli_connect($fmdb_hostname, $fmdb_username, $fmdb_password, $fmdb_db);

if(mysqli_connect_errno()){
    die ("unable to reach Sever: " . mysql_error());
  }

if($_SERVER["REQUEST_METHOD"]=="POST"){
        $SRO=$_POST['sro'];
        $wkNumb=$_POST['wkNumb'];
        $client=$_POST['Client'];
        $total=$_POST['total'];
        $inputDate=getdate(date("U"));
       
        $finalDate="$inputDate[weekday], $inputDate[month] $inputDate[mday], $inputDate[year]";
    $InsertToTable = "INSERT INTO  SalesSummaries(SRO, wkNumb, client, total, inputDate) VALUES ('$SRO','$wkNumb','$client','$total','$finalDate');";

    if (mysqli_query($server, $InsertToTable)){
        echo "<div class= 'container'><h1>User Saved Succesfully</h1>";
    } else {
        echo"<h1>User Not saved</h1><br>"
        . mysqli_error($server);
    }
mysqli_close($server);
}
?>