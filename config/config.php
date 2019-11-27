<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
//echo date("m/d/Y h:i A");

// S3 
$s3="";	
function assets ($s3,$asset_path)
{
	if ($s3=="") {
		echo $asset_path;
	}
	else
	{
	echo $s3.$asset_path;
	}
}
assets($s3,"");
//RDS 
$host="localhost";
$user="root";
$pass="";
$db="pgscois";
$conn = new mysqli($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  	/*echo "Failed to connect to MySQL: " . mysqli_connect_error();*/
  	echo '<script> alert("Failed to connect DB"); </script>';
  }
?>