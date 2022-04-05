<?php
    $hostname = 'localhost';
    $db ='userPractice';
    $username = 'guest';
    $password = '123456';
$server = mysqli_connect($hostname, $username, $password, $db);

    if(mysqli_connect_errno()){
        die("Unable to Reach the Server:" .mysql_error();
    }