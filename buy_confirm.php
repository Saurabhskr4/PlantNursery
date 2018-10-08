<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$qnt=$_POST['em01'];
	$amt=$_POST['em02'];
	$name=$_POST['em1'];
	$mail=$_POST['em4'];
	$city=$_POST['em8'];
	$zip=$_POST['em9'];
	$street=$_POST['em10'];
	$country=$_POST['em11'];
	$em=$_POST['em12'];
	$ph=$_POST['em12'];

	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$query="INSERT INTO records (name,email,sellermail,quantity,amount,id)VALUES('$n','$em','$mail','$qnt','$amt','$id')";
	if(mysqli_query($con,$query))
	{
		if($id>1000)
		{
			sql="SELECT * FROM tool WHERE id='$id'";
			$res=mysqli_query($con,$sql);
			if($row=mysqli_fetch_assoc($res))
			{
				$stk=$row['stock'];
				$stk=$stk-$qnt;
			}
			$query="UPDATE tool SET stock=$stk WHERE id='$id'";		
			if(mysqli_query($con,$query))
			{
				header("location:look.php?msg=Order placed");
			}

			

		}
		else
		{
			sql="SELECT * FROM plants WHERE id='$id'";
			$res=mysqli_query($con,$sql);
			if($row=mysqli_fetch_assoc($res))
			{
				$stk=$row['stock'];
				$stk=$stk-$qnt;
			}
			$query="UPDATE plants SET stock=$stk WHERE id='$id'";
			
			if(mysqli_query($con,$query))
			{
				header("location:look.php?msg=Order placed");
			}	
		}
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>