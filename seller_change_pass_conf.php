<?php
if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$oldpass=$_POST['opass'];
		$newpass=$_POST['pass'];
		$cpass=$_POST['pass1'];
		$mail=$_COOKIE['user'];
		$con=mysqli_connect("127.0.0.1","root","","nursery");
		$sql="select password from seller where email='$mail'";
		$res=mysqli_query($con,$sql);

		if($row=mysqli_fetch_assoc($res))
		{
			$dbpass=$row['password'];
			if($dbpass==$oldpass)
			{
				if($newpass==$cpass)
				{
					$update="UPDATE seller SET password='$cpass' WHERE email='$mail'";
					if(mysqli_query($con,$update))
					{
						header("location:seller_change_pass.php?msg=Password updated successfully");
					}
				}
				else
				{
					header("location:seller_change_pass.php?error=password conformation failed");
				}
			}
			else
			{
				header("location:seller_change_pass.php?error=Old password is not correct");
			}
		}
	}
?>