<?php 

$mysql_host = "localhost"; 
$mysql_database = "joey"; 
$mysql_user = "admin"; 
$mysql_password = 'Shawn19871226'; 

// Create connection 
$con=mysqli_connect($mysql_host,$mysql_database,$mysql_user,$mysql_password,'joey'); 

// Check connection 
if (mysqli_connect_errno($con)) 
  { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    } 
?>