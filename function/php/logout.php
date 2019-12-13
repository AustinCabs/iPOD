<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

//echo var_dump($_SESSION['account_id']);

 header('location:../../login.php');
