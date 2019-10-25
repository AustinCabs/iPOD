<?php
$conn = new mysqli("localhost","root","","pgscois");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>