<?php 
$HostName = "localhost";
$DatabaseName = "newspaper";
$HostUser = "root";
$HostPass = "";
$connect= mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName) or die("Database erro");
mysqli_set_charset($connect,'utf8');
?>