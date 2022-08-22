<?php
  $fmdb_hostname='localhost';
  $fmdb_db='userpractice';  
  $fmdb_username= 'fpan004';
  $fmdb_password='22443';
    $server =  mysqli_connect($fmdb_hostname, $fmdb_username, $fmdb_password, $fmdb_db);

if(mysqli_connect_errno()){
    die ("unable to reach Sever: " . mysql_error());
  }
?>