<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
$time=date("m/d/Y h:i A");

// S3 
$environment="development";	// development or production
$file_url="assets/PGSC/";
$s3="";
function assets ($s3,$environment,$asset_url)
{
	if ($environment=="development") {
		echo $asset_url;
	}
	else
	{	
		echo $s3.$asset_url;
	}
}

function file_path ($s3,$environment,$file_url)
{
	if ($environment=="development") 
	{
		return $file_url;
	}
	else
	{	
		return $s3.$file_url;
	}	
}

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