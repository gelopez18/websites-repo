<?php
  require_once __DIR__ . '\services\connectDB.php';

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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Call Summary</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            td {
          padding-left: 10px;
          padding-right: 10px;
             }
             img{

                background-repeat: no-repeat;
                background-color: (#4b4c4d);
                background-position: center;
                background-size: 78%;
             }    
    </style>
  </head>
  <body>
        <img height = 100 width = 700 class="d-flex justify-content-end" src='Picture1.png'>     
        <script type= 'module' src='src/app.js'></script>

    </body>
  </html>