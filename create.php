<?php
include 'database.php';
include 'session.php';

if(isset ($_POST['create']))
{
	if(empty($_POST['title']) || empty($_POST['description']))
	{
		echo 'Fill in the information that required (*)';
	}else{
		$title=$_POST['title'];
		$description=$_POST['description'];
		$date=$_POST['date'];
		$user=$_SESSION['email'];
		
		$sql="Insert into list (list_title, list_description, list_date,user_email)
		values ('$title','$description','$date','$user')";

		$data=mysqli_query($account, $sql) or die (mysqli_connect_error());
		if($data)
		{
			header ("Location:main.php");
		}
		

		
	}
}

?>