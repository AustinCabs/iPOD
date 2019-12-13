<?php
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