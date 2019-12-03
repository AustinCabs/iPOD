<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
//echo date("m/d/Y h:i A");

// S3 
$environment="development";	// development or production
function assets ($environment,$asset_url)
{
	if ($environment=="development") {
		echo $asset_url;
	}
	else
	{	$s3="";
		echo $s3.$asset_url;
	}
}

//RDS 
/*$host="localhost";
$user="root";
$pass="";
$db="pgscois";
$conn = new mysqli($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	echo '<script> alert("Failed to connect DB"); </script>';
  }*/
?>