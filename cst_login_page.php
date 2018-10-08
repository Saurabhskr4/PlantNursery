<?php

session_start();
if($_SESSION['suser']=="")
{
	header("location:login1.php?msg=login first");
}
else
{
	$user=$_COOKIE['user'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sel="SELECT * FROM customer WHERE email='$user'";
	$res=mysqli_query($con,$sel);
		if($one=mysqli_fetch_assoc($res))
		{
			$n=$one['name'];
			$loc="uploads1/";
			$pic=$one['profile'];
		}
}
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="class.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<title>User deatails</title>
<style>
 a{
 color:white;
 }
 .list{
	font-size:16px;
	height:1%;
	color:black;
	border-bottom:1px solid lightgrey;
	display:block;
	}
 .list:hover{
	 color:skyblue;
	 padding-left:20px;
 }
</style>
</head>
<body>
    <?php
    include '11.php';
    ?>
    <div class="container-fluid"id="top"style="margin:0px;padding:0px">
         <div style="width:100%;height:720px;margin-top:-20px">
               <div class="well"style="height:100%;width:25%;float:left;">
                    <center>
                        <div style="height:70px;width:30%">
                        <?php  echo "<img src='". $loc . $pic ."' style='width:100%;height:100%' class='img-circle'alt='customer profile pic' /> "?>
                        </div>
                        <?php echo "<h3> $n</h3>"?>
                    </center>
                    <ul class="nav nav-tabs-vertical">
                        <li><a href="buyerprofile.php" class="list"target="frame">Update Profile</a></li>
                        <li><a href="show_cart.php" class="list"target="frame">Cart</a></li>
                        <li><a href="status.php" class="list"target="frame">Gardener request</a></li>
                        <li><a href="history.php" class="list"target="frame">Order history</a></li>
                        <li><a href="buyer_change_pass.php" class="list"target="frame">Change password</a></li>
                        <li><a href="logout1.php" class="list">Logout</a></li>
                    </ul>
                </div>
                <div style="height:100%;width:75%;float:right;background-color:white" >
                    <iframe style="height:100%;width:100%;float:left;border:none" src="show_cst_profile.php" name="frame"></iframe>
                </div>
            </div>
    </div>
    <?php
    include 'foot.php';
    ?>
</body>
</html>