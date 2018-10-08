<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$n=$_POST['name'];
	$em=$_POST['mail'];
	$cont=$_POST['number'];
	$pswd=$_POST['pass'];
	$cpswd=$_POST['pass1'];
	$sqs=$_POST['sq'];
	$sqa=$_POST['sqa'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if($pswd==$cpswd)	
	{
		$sql="INSERT INTO seller(cname,email,contact,password,sqs,sqa) VALUES('$n','$em','$cont','$pswd','$sqs','$sqa')";
		echo $sql;
		setcookie('cmp',$n,time()+24*60*60);
		if(mysqli_query($con,$sql))
		{
            header("location:seller.php?msg=Registrarion successful");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
        header("location:seller.php?error=Registrarion FAILED please retry!!");
	}
}
?>