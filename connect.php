<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'bus';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>