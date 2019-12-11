<?php
include '../../config/config.php';

$valid['success'] = array('success' => false, 'messages' => array());

if (isset($_POST['user'])&&isset($_POST['pass'])) 
{
	 $user=mysqli_real_escape_string($conn,$_POST['user']);
	 $pass=mysqli_real_escape_string($conn,$_POST['pass']);

	 $sql="SELECT username,password FROM accounts WHERE username = '$user'";

	 if ()
	  {

	  }
	
}
else
{
		$valid['success'] = false;
		$valid['messages'] = "Empty Fields";
}