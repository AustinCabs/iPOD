<?php
include '../../config/config.php';
session_start();

$valid['success'] = array('success' => false, 'messages' => array(),'url' => array());

if (isset($_POST['user'])&&isset($_POST['password'])) 
{	 
	if (empty($_SESSION['account_id']))
	 {
		 $user=mysqli_real_escape_string($conn,$_POST['user']);
		 $pass=mysqli_real_escape_string($conn,$_POST['password']);

		 $sql="SELECT account_id,username,password FROM accounts WHERE username = '$user' AND is_active = 1";
		 $res = mysqli_query($conn,$sql);

		 if ($res)
		  {
		  	if (mysqli_num_rows($res)>0) 
		  	{
		  		  while($row = mysqli_fetch_array($res))
		  		  { $hash=$row['password'];
		  		  	if (password_verify($pass,$hash))
						{
							if ($row['account_id']==1)
							{
								$_SESSION['account_id']=$row['account_id'];
								
								$valid['url']="admin/dashboard.php";
							}
							else
							{
								$_SESSION['account_id']=$row['account_id'];
								$valid['url']="user/dashboard.php";

							}

							$valid['success'] = true;
							$valid['messages'] = "Successfully Login";	
						}
						else
						{
							$valid['success'] = false;
							$valid['messages'] = "Account does not exist";
						}
		  		  }
		  	}
		  	else
		  	{
		  		$valid['success'] = false;
		  		$valid['messages'] = "Account does not exist";
		  	}
		  }
		  else
		  {
		  	$valid['success'] = false;
			$valid['messages'] = "Something went wrong..";
		  }
	
	 }
	 else
	 {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Account is in use..";
	 }
	
	  if (!empty($_SESSION['account_id'])) {
	  	$sql1="INSERT INTO activity_logs (action,time,account_id) VALUES ('Login','$time','{$_SESSION['account_id']}')";
	  	if (mysqli_query($conn,$sql1))
	  	{}
	  else
	  	{ echo mysqli_error($conn); }
	}
}
else
{
		$valid['success'] = false;
		$valid['messages'] = "Empty Fields";
}

echo json_encode($valid);
mysqli_close($conn);