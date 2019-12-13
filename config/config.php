<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
$time=date("m/d/Y h:i A");

//s3
include 'assets_url.php';

//RDS 
$host="localhost";
$user="root";
$pass="";
$db="pgscois_copy";
$conn = new mysqli($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	echo '<script> alert("Failed to connect DB"); </script>';
  }
?>