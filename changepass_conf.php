<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$newpass=$_POST['pass'];
	$cpass=$_POST['pass1'];
	$email=$_COOKIE['password'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sql="select password from seller where email='$email'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)>0)
		{
			if($row=mysqli_fetch_assoc($res))
			{
				if($newpass==$cpass)
				{
					$update="UPDATE seller SET password='$cpass' WHERE email='$email'";
					if(mysqli_query($con,$update))
					{
						header("location:changepass.php?msg=Password updated successfully");
					}
				}
				else
				{
					header("location:changepass.php?error=password conformation failed");
				}
			}
		}
		else
		{
			$sql1="select password from customer where email='$email'";
			$new=mysqli_query($con,$sql1);
			if($row=mysqli_fetch_assoc($new))
			{
				if($newpass==$cpass)
				{
					$update="UPDATE customer SET password='$cpass' WHERE email='$email'";
					if(mysqli_query($con,$update))
					{
						header("location:changepass.php?msg=Password updated successfully");
					}
					else
					{
						header("location:changepass.php?error=password conformation failed");
					}
				}
			}
		}
	}
}
?>