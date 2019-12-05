<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
//echo date("m/d/Y h:i A");

// S3 
$environment="developments";	// development or production
$file_url="assets/PGSC/";
$s3="";
function assets ($environment,$asset_url,$s3)
{
	if ($environment=="development") {
		echo $asset_url;
	}
	else
	{	
		//echo $s3.$asset_url.'<br>';
		return $file_path =$s3.$file_url;
	}
}

function file_path ($environment,$file_url,$s3)
{
	if ($environment=="development") 
	{
		echo $file_url;
	}
	else
	{	
		echo $s3.$file_url;
	}	
}

//RDS 
$host="localhost";
$user="root";
$pass="";
$db="pgscois_db";
$conn = new mysqli($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	echo '<script> alert("Failed to connect DB"); </script>';
  }
?>