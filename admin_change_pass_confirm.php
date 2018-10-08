<?php
	if(isset($_GET['update']))
	{
		$oldpass=$_GET['opass'];
		$newpass=$_GET['pass'];
		$cpass=$_GET['pass1'];
		$con=mysqli_connect("127.0.0.1","root","","nursery");
		$sql="SELECT password FROM admin";
		if ($res=mysqli_query($con,$sql))
		{
			if($row=mysqli_fetch_assoc($res))
			{
				$dbpass=$row['pswd'];
				if($dbpass==$oldpass)
				{
					if($newpass==$cpass)
					{
						$update="UPDATE admin SET password='$cpass'";
						if(mysqli_query($con,$update))
						{
							header("location:admin_change_pass.php?msg=Password updated successfully");
						}
					}
					else
					{
						header("location:admin_change_pass.php?error=password conformation failed");
					}
				}
				else
				{
					header("location:admin_change_pass.php?error=Old password is not correct");
				}
			}
		}
	}
?>