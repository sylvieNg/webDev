<?php
include 'database.php';
include 'session.php';

if(isset ($_POST['delete']))
{

		$list_id=$_POST['id'];
		
		$sql="DELETE FROM list WHERE list_id=$list_id";

		$data=mysqli_query($account, $sql) or die (mysqli_connect_error());
		if($data)
		{
			header ("Location:main.php");
		}
}
?>