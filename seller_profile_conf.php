<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['cp1'];
    $est=$_POST['cp2'];
    $people=$_POST['cp4'];
    $country=$_POST['cp6'];
    $street=$_POST['cp7'];
    $zip=$_POST['cp8'];
    $city=$_POST['cp9'];
    $cont=$_POST['cp10'];
    $mail=$_POST['cp11'];
    $back=$_POST['cp12'];
    $img=$_FILES['logo']['name'];
	$temp=$_FILES['logo']['tmp_name'];
	$loc="uploads/";
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if($img!="")
	{
		$query="UPDATE seller SET cname='$name',easted='$est',people='$people',state='$country',street='$street',zip='$zip',city='$city',contact='$cont',background='$back',logo='$img'WHERE email='$mail' ";
		if(mysqli_query($con,$query) )
		{
			move_uploaded_file($temp,$loc.$img);
			header("location:show_seller_profile.php");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		$query="UPDATE seller SET cname='$name',easted='$est',people='$people',state='$country',street='$street',zip='$zip',city='$city',contact='$cont',background='$back' WHERE email='$mail' ";
		if(mysqli_query($con,$query) )
		{
			header("location:show_seller_profile.php");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
?>