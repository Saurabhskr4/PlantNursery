<?php
include'1.php';
?><!doctype html>
<html lang="en-us">
<head>
<title>Change Password</title>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<link rel="stylesheet" type="text/css"href="class.css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<style>
	.blinking{
    animation:blinkingText 3s infinite;
	}
@keyframes blinkingText{
    0%{     color: white;    }
    49%{    color: transparent; }
    50%{    color: white; }
    99%{    color:transparent;  }
    100%{   color: white;    }
}
</style>
</head>
<body>
 <div class="conatiner-fluid">
 <div class="jumbotron"style="background-color:white">
   <div class='alert'><h2>Change password</h2>
    <div class="injumbo2" style="margin-left:20px">
     <form action="changepass_conf.php"method="post"enctype="multipart/form-data">
		<table style="width:50%">
		   <tr><h4>New Password</h4></tr>
		   <tr><input type="password"style="width :50%"name="pass" class="form-control" placeholder="Enter password length=8-20 char" required /></tr>
		   <tr><h4>Password confirmation</h4></tr>
		   <tr><input type="password"style="width :50%"name="pass1" class="form-control"placeholder="Re-type password" required /></tr>
		   <tr><input type ="submit"class="btn btn-info" style="display:inline" value="Update" name="update"/></tr>
		   <tr><input type ="reset"class="btn btn-danger" style="display:inline" value="Clear"/></tr>
	   	</table>
	 </form>
	 <?php
	  if(isset($_GET['msg']))
	  {
		  echo "<div class='alert blinking'style='width:40%;background-color:darkgreen'><center>";
		  echo $_GET['msg'];
		  echo "</center></div>";
	  }	 
	if(isset($_GET['error']))
	{
		echo "<div class='alert blinking'style='width:40%;background-color:darkred'><center>";
		echo $_GET['error'];
		echo "</center></div>";
	}
	 ?>
	</div>	
  </div>
</div>
</div>
</body>
</html>