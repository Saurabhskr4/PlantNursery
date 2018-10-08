<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_POST['em1'];
	$lname=$_POST['em2'];
	$mail=$_POST['em4'];
	$gen=$_POST['em7'];
	$city=$_POST['em8'];
	$zip=$_POST['em9'];
	$street=$_POST['em10'];
	$country=$_POST['em11'];
	$ph=$_POST['em12'];
	$pro=$_FILES['pic']['name'];
	$tmp=$_FILES['pic']['tmp_name'];
	$loc="uploads1/";
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if($pro == "")
	{
		$query="update customer set name='$name',
		lastname='$lname',
		gender='$gen',
		city='$city',
		zip='$zip',
		street='$street',
		state='$country',
		phone='$ph'
		where email='$mail'";
		if(mysqli_query($con,$query))
		{
			header("location:show_cst_profile.php");
		}
		else
		{
			echo mysqli_error($con);
		}
		
	}
	else
	{
		$query="update customer set name='$name',
		lastname='$lname',
		gender='$gen',
		city='$city',
		zip='$zip',
		street='$street',
		state='$country',
		phone='$ph',
		profile='$pro'
		where email='$mail'";
		if(mysqli_query($con,$query) )
		{
			if(move_uploaded_file($tmp,$loc . $pro))
			{
				header("location:show_cst_profile.php");
			}
			else
			{
				echo mysqli_error($con);
			}
		}
	}
}
?>