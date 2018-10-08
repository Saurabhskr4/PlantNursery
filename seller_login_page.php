<?php
session_start();
if($_SESSION['suser']=="")
{
	header("location:login1.php?login first");
}
else
{
	$user=$_COOKIE['user'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sel="SELECT * FROM seller WHERE email='$user'";
	$res=mysqli_query($con,$sel);
		if($one=mysqli_fetch_assoc($res))
		{
			$name=$one['cname'];
			$loc="uploads/";
			$lg=$one['logo'];
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
    <title>Seller page</title>
    <style>
     a{
     color:white;
     }
     .list{
        font-size:16px;
        height:1%;
        color:black;
        border-bottom:1px solid lightgrey;
        }
     .list:hover{
         color:skyblue;
         padding-left:20px;
     }
    </style>
    </head>

    <body>
    <?php
        include '111.php';
    ?>
        <div class="container-fluid"id="top"style="margin:0px;padding:0px">
            <div style="width:100%;height:720px;margin-top:-20px">
                <div class="well"style="height:100%;width:25%;float:left">
                    <center>
                        <div style="height:70px;width:80%">
                        <?php  echo "<img src='". $loc . $lg ."' style='width:100%;height:100%' class='img-circle'alt='seller profile pic' /> "?>
                        </div>
                        <?php echo "<h3> $name</h3>"?>
                    </center>
                    <ul class="nav nav-tabs-vertical">
                        <li><a href="seller_profile.php" class="list"target="ifm">Update Profile</a></li>
                        <li><a href="seller_change_pass.php" class="list"target="ifm">Change password</a></li>
                        <li><a href="addplant.php" class="list"target="ifm">Post new plant</a></li>
                        <li><a href="posted_plants.php" class="list"target="ifm">Posted plants</a></li>
                        <li><a href="addtool.php" class="list"target="ifm">Post new tool</a></li>
                        <li><a href="posted_tools.php" class="list"target="ifm">Posted tools</a></li>
                        <li><a href="logout1.php" class="list">Logout</a></li>
                    </ul>
                </div>
                <div style="height:100%;width:75%;float:right;backgraoud-color:white">
                    <iframe style="height:100%;width:100%;float:left;border:none"src="show_seller_profile.php" name="ifm"></iframe>
                </div>
          </div>
        </div>
        <?php
            include 'foot.php';
          ?>
    </body>
</html>