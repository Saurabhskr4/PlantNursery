<?php
if(isset($_GET['update']))
{
	$oldpass=$_GET['opass'];
	$newpass=$_GET['pass'];
	$cpass=$_GET['pass1'];
	$user=$_COOKIE['user'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sql="select password from customer where email='$user'";
	$res=mysqli_query($con,$sql);
	if($row=mysqli_fetch_assoc($res))
	{
		$dbpass=$row['password'];
    }
    if($dbpass==$oldpass)
    {
        if($newpass==$cpass)
        {
            $query="UPDATE customer SET password='$cpass' where email='$user'";
            if(mysqli_query($con , $query))
            {
					header("location:buyer_change_pass.php?msg=Password updated successfully");
            }
            else
            {
					echo $query;
            }
        }
        else
        {
				header("location:buyer_change_pass.php?error=password conformation failed");
        }
    }
	else
	{
        header("location:buyer_change_pass.php?error=Old password is not correct");
	}
}
?>