<?php
if(isset($_GET['login']))
{
	$pswd=$_GET['pass'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$adm="select * from admin";
	if($admin=mysqli_query($con,$adm))
	{
		if($res=mysqli_fetch_assoc($admin))
		{	
			$dbpswd=$res['password'];
			if($pswd==$dbpswd)
			{
                date_default_timezone_set("Asia/Kolkata");
				$tm=getdate("h:i:s:a");
				setcookie('user',$em,time()+24*60*60);
				setcookie('time',$tm,time()+24*60*60);            
				header("location:admin_login_page.php");
			}
			else
			{
				header("location:admin_login.php?error=Check your password");
			}
		}
	}
}
?>