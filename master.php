<?php

error_reporting(0);
session_start();
if($_SESSION['suser'])
{
	$mail=$_SESSION['suser'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$q="SELECT * from customer where email='$mail'";
	$qr="SELECT * FROM seller where email='$mail'";
	$res=mysqli_query($con,$q);
	if(!mysqli_num_rows($res))
	{
		$one=mysqli_query($con,$qr);
		if(mysqli_num_rows($one))
		{
			include '111.php';
		}
	}
	else
	{
		include '11.php';
	}
}
else
{
	include'1.php';
}
?>