<?php

include 'database.php';
session_start();

$user=$_SESSION['email'];
$session=mysqli_query($account, "Select user_name from user where user_email='$user'");
$row=mysqli_fetch_array($session);
$login_session=$row['user_name'];
if(!isset($login_session)){

	//header("Location:home.php");
	$_SESSION['email']='';
	$login_session='guest';

}

?>