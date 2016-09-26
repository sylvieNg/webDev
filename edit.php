<?php
include ('database.php');
include ('session.php');

if (isset($_POST['edit']))
{
	$list_title=$_POST['title'];
	$list_description=$_POST['description'];
	$list_date=$_POST['date'];
	$id=$_POST['list_id'];

	$query=mysqli_query($account,"update list set list_title='$list_title', list_description='$list_description', list_date='$list_date' where list_id=$id");

	if($query)
	{
		echo "<script type='text/javascript'>alert('Update Successfully')
		window.location='main.php'</script>";
	}
}

?>