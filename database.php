<?php
$account =mysqli_connect("localhost","root","","webdev");

if(mysqli_connect_errno())
{
	echo mysqli_connect_error();
	exit();
}

?>