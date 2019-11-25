<?php 
//timezone
date_default_timezone_set("Asia/Singapore");
//echo date("m/d/Y h:i A");

// S3 
$s3="https://www.tutorialrepublic.com";
function assets ($s3,$a)
{
	if ($s3=="") {
		echo $a;
	}
	else
	{
	echo $s3.$a;
	}
}

//RDS 
$host="localhost";
$user="root";
$pass="";
$db="pgscois";
$conn = new mysqli($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>