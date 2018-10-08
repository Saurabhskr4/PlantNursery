<?php
if(isset($_GET['login']))
{
	$mail=$_GET['mail'];
	$sqs=$_GET['sqs'];
	$sqa=$_GET['sqa'];
	
	
	echo $mail;
	echo $sqs;
	echo $sqa;
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sql="select * from seller where email='$mail'";
	if($admin=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($admin)>0)
		{
			if($res=mysqli_fetch_assoc($admin))
			{	
				$dbsq=$res['sqs'];
				$dbsqa=$res['sqa'];
				if($sq==$dbsq)
				{
					if($dbsqa==$sqa)
					{
						setcookie("password",$mail,time()+24*60*60);
						header("location:changepass.php");
					}
					else
					{
						header("location:forgot.php?error=* INCORRECT ANSWER * ");
					}
				}
				else
				{
					header("location:forgot.php?error=* INCORRECT ANSWER * ");
				}
			}
		
		}
		else
		{
			$sq2="select * from customer where email='$mail'";
			if($admin=mysqli_query($con,$sq2))
			{
				if(mysqli_num_rows($admin)>0)
				{
					if($res=mysqli_fetch_assoc($admin))
					{	
						$dbsq=$res['sqs'];
						$dbsqa=$res['sqa'];
						if($sqs=$dbsq)
						{
							if($bsqa=$sqa)
							{
								setcookie("password",$mail,time()+24*60*60);
								header("location:changepass.php");
							}
							else
							{
								header("location:forgot.php?error=* INCORRECT ANSWER * ");
								
							}
						}
					}
				}
			}
		}
	}
}
?>