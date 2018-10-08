<?php
session_start();
if(isset($_GET['login']))
{
	$em=$_GET['mail'];
	$pswd=$_GET['pass'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
    $cst="select * from customer where email='$em'";
	$sale="select * from seller where email='$em'";
	$cstdata=mysqli_query($con,$cst);
	if(!mysqli_num_rows($cstdata))
	{
		$saledata=mysqli_query($con,$sale);
		if(!mysqli_num_rows($saledata))
		{ 
			header("location:login1.php?error=This mail is not registered");
		}
		else
		{
			if($res=mysqli_fetch_assoc($saledata))
			{	
				$dbname=$res['cname'];
				$dbpswd=$res['password'];
				if($pswd==$dbpswd)
				{
					$_SESSION['suser']=$em;
					setcookie('cmp',$dbname,time()+24860*120);
					setcookie('user',$em,time()+24*60*60);
					header("location:seller_login_page.php");
				}
				else
				{
					header("location:login1.php?error=Check your password");
				}
			}
		}
	}
	else 
	{
		if($res=mysqli_fetch_assoc($cstdata))
		{
			$dbpswd=$res['password'];
			if($pswd==$dbpswd)
			{
				$_SESSION['suser']=$em;
				$tm=date("h:i:s:a");
				setcookie('user',$em,time()+24*60*60);
				setcookie('time',$tm,time()+24*60*60);
				header("location:cst_login_page.php");
			}
			else
			{
				header("location:login1.php?error=Check your password");
			}
		}
	}
}
?>