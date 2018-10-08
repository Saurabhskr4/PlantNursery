<?php
if(isset($_GET['register']))
{
	$n=$_GET['name'];
	$ln=$_GET['lanme'];
	$em=$_GET['mail'];
	$sq=$_GET['sq'];
	$sqa=$_GET['sqa'];
	$pswd=$_GET['pass'];
	$cpswd=$_GET['pass1'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if($pswd==$cpswd)
	{
		$sql="insert into customer(name,lastname,email,password,sqa,sqs)values('$n','$ln','$em','$pswd','$sqa','$sq')";
		if(mysqli_query($con,$sql))
		{
			header("location:cstreg.php?msg=Registration Successful");
		}
		else
		{
			echo "$n, $ln ,$em, $sq, $sqa, $pswd, $cpswd<br/>";
			echo mysqli_error($con);
		}
	}
	else
	{
			header("location:cstreg.php?error=Registration Failed ! try again");
	}
}
?>