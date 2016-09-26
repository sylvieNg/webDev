<?php
include 'database.php';

if(isset($_POST['signup']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm=$_POST['repeat'];
	$email=$_POST['email'];
	$encrypt_pass=md5(md5($password)."thisIsTheBestSaltEver");
	$encrypt=md5(md5($confirm)."thisIsTheBestSaltEver");

	$result=mysqli_query($account, "select *from user where user_email='$_POST[email]'") or die (mysqli_connect_error());
	$row=mysqli_fetch_array($result);
		
	if($_POST['email'] == $row['user_email'] )
	{
		echo "<script type='text/javascript'>alert('Email already exist')
		window.location='to-do-list.php'
		</script>";

	}else{

		if($encrypt_pass==$encrypt)
		{
			$sql="Insert into user(user_name,user_email,user_password)values
			('$username','$email','$encrypt_pass')";
			$data = mysqli_query($account, $sql) or die (mysqli_connect_error());

			if($data)
			{
				echo "<script type='text/javascript'>alert('Register successfully')
				window.location='to-do-list.php'</script>";

			}
		}
		
			
	}	
}

?>