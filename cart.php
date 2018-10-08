<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="widh" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="classes.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<style>

	.blinking{
    animation:blinkingText 3s infinite;
	}
@keyframes blinkingText{
    0%{     color: red;    }
    49%{    color: transparent; }
    50%{    color: red; }
    99%{    color:transparent;  }
    100%{   color: darkred;    }
}
</style>
</head>
<body>
<?php
session_start();
if($_SESSION['suser'])
{
	$mail=$_SESSION['suser'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$q="SELECT * from customer where email='$mail'";
	$qr="SELECT * FROM seller where email='$mail'";
	$res=mysqli_query($con,$q);
	if(!mysqli_num_rows($res))
	{
		$one=mysqli_query($con,$qr);
		if(mysqli_num_rows($one))
		{
			include '111.php';
            if(isset($_GET['id']))
            {
                $i=$_GET['id'];
                $em=$_COOKIE['user'];
                $sql2="INSERT INTO cart(email,id)VALUES('$em','$i')";
                if(mysqli_query($con,$sql2))
                {
					echo "<center><div class='alert alert-warning'style='width:50%;margin-top:100px'>ITEM ADDED TO YOUR CART </div></center";
					echo "<center><a href='look.php?id=$i'<div class='alert alert-danger blinking'style='width:40%'>CLICK TO GO BACK </div></center>";
                }
                else
                {
                    mysqli_error($sql);
                }
            }
		}
	}
	else
	{
		include '11.php';
        if(isset($_GET['id']))
		{
			$i=$_GET['id'];
			$em=$_COOKIE['user'];
			$sql2="INSERT INTO cart(email,id)VALUES('$em','$i')";

			if(mysqli_query($con,$sql2))
			{
				echo "<center><div class='alert alert-warning'style='width:50%;margin-top:100px'>ITEM ADDED TO YOUR CART </div></center>";
				echo "<center><a href='look.php?id=$i'<div class='alert alert-danger blinking'style='width:40%'>CLICK HERE TO GO BACK </div></a></center>";

		   }
		}
		else
		{
			mysqli_error($sql);
		}
	}
}

else
{
	header("location:login1.php?msg=Please login first");
}
?>
</body>
</html>