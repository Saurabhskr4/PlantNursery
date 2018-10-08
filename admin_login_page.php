<?php
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sel="SELECT * FROM admin ";
	$res=mysqli_query($con,$sel);
		if($one=mysqli_fetch_assoc($res))
		{
			$n=$one['name'];
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
<title>Online plant nursery</title>
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
<div class="container-fluid"id="top"style="margin:0px;padding:0px">
 <div class="main" style="width:100%;height:1350px;background-color:white">
		<div class="well"style="height:100%;width:25%;float:left">
					<div class="alert"><h2>Admin Dashboard</h2></div>
			<div style="height:15%;width:80%;border:1px solid black;border-radius:2%"><img src="124917.jpg"style="width:100%;height:100%"class="img-rounded"/>
			</div>
			<ul class="nav nav-tabs-vertical">
				<li><a href="admin_change_pass.php" class="list"target="page">Change password</a></li>
				<li><a href="request.php" class="list"target="page">Gardener Request reply </a></li>
				<li><a href="logout1.php" class="list">Logout</a></li>
			</ul>
		</div>
   <div style="height:100%;width:75%;float:right;background-color:white" class="alert">
		<iframe style="height:100%;width:100%;float:left;border:none" src="welcome_admin.php" name="page"></iframe>
   </div>
  </div>
   </div>
  <?php
  if(isset($_GET['error']))
  {
	  echo $_GET['error'];
  }
	include 'foot.php';
  ?>
</body>
</html>