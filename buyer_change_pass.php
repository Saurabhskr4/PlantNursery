<!doctype html>
<html lang="en-us">
<head>
<title>Log-in</title>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<link rel="stylesheet" type="text/css"href="class.css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<style>
</style>
</head>
<body>
 <div class="conatiner-fluid">
 <div class="jumbotron"style="background-color:white">
   <caption><h2 style="margin:20px 20px">change password</h2></caption>
    <div class="injumbo2" style="margin-left:20px">
     <form action="cst_change_pass_conf.php">
		<table style="width:50%">
		<tr><h4>Old Password</h4></tr>
	   <tr><input type="password"style="width :50%"name="opass" class="form-control" placeholder="Enter old password " required /></tr>
	   <tr><h4>New Password</h4></tr>
	   <tr><input type="password"style="width :50%"name="pass" class="form-control" placeholder="Enter password length=8-20 char" required /></tr>
	   <tr><h4>Password confermation</h4></tr>
	   <tr><input type="password"style="width :50%"name="pass1" class="form-control"placeholder="Re-type password" required /></tr>
	   <tr><input type ="submit"class="btn btn-info" style="display:inline" value="Update" name="update"/></tr>
	   <tr><input type ="reset"class="btn btn-danger" style="display:inline" value="Clear"/></tr>
	   </table>
	 </form>
	 <?php
	  if(isset($_GET['error']))
	  {
		  echo "<div class='alert alert-danger' >";
		  echo $_GET['error'];
		  echo "</div>";
	  }	 
	  if(isset($_GET['msg']))
	  {
		  echo "<div class='alert alert-info' >";
		  echo $_GET['msg'];
		  echo "</div>";
	  }
	 ?>
	</div>	
  </div>
</div>
</body>
</html>