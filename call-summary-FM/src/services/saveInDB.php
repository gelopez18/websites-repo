<?php
    require_once 'connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userName =$_POST['Username'];
        $emailAddress =$_POST['emailAddress'];
        $Uname =$_POST['UName']; 
        $company=$_POST['company'];
        $password=$_POST['password'];


        $SendToSqlDB = "INSERT INTO userInfo(username, emailAddress, name, company, password) VALUES ('$userName','$emailAddress','$Uname','$company','$token');";
        
        if (mysqli_query($server, $SendToSqlDB)){
            echo "<div class= 'container'><h1>User Saved Succesfully</h1>";
        } else {
            echo"<h1>User Not saved</h1><br>"
            . mysqli_error($server);
        }
  mysqli_close($server);
        
    }
    ?>