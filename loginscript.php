<?php
include 'database.php';
include 'session.php';

if(isset ($_POST['login']))
{
	if(empty($_POST['email'])&&empty($_POST['pass']))
	{
		echo "<script type='text/javascript'>alert('Email and password are empty')
					window.location='to-do-list.php'
					</script>";

	}else if(empty($_POST['pass'])){

		echo "<script type='text/javascript'>alert('Password is empty')
					window.location='to-do-list.php'
					</script>";
	}else if(empty($_POST['email'])){
		echo "<script type='text/javascript'>alert('Email is empty')
					window.location='to-do-list.php'
					</script>";
	}else
	{
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$encrypt_pass=md5(md5($password)."thisIsTheBestSaltEver");

		$query="SELECT *from user WHERE user_email='$email' AND 
				user_password='$encrypt_pass'";
		$result=mysqli_query($account, $query);
		$row=mysqli_fetch_array($result);

		if($row['user_email'] == $email &&$row['user_password']==$encrypt_pass)
		{
				$_SESSION['email']=$email;
				echo "<script type='text/javascript'>alert('Login successfully')
					window.location='main.php'
					</script>";

		}else{
			echo "<script type='text/javascript'>alert('Email and password invalid')
					window.location='to-do-list.php'
					</script>";
		}
	
	}
}else
{
	header("Location: signup.php");
}

?>