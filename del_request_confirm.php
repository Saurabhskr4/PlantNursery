<?php
if(isset($_GET['num']))
{
	$m=$_GET['num'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sql="DELETE * FROM feed where rnum='$m'";
    if(mysqli_query($con,$sql))
	{
		header("location:request_confirmation.php?msg=deleted successfully");
	}
	else
	{
		echo "had";
	}
}
?>