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
a{
 color:white;
}
a:hover{
color:red;
text-decoration:none;
}
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
<?php 
include '1.php';
?>

<div class="container-fluid"style="margin:0px;padding:0px;">
	<center>
	<div class="jumbotron" style="width:40%;margin-top:5%">
		<div style="background-color:white;padding-left:10%">
		 <form action="admin_login_confirm.php"method="get">
		   <table style="width:90%">
			  <tbody>
				  <tr>
					  <td><h4>Email</h4></td>
				  </tr>
				  <tr>
					  <td><input type="email"name="mail" class="form-control"placeholder="Enter email address"required /></td>
				  </tr>
				  <tr>
					  <td><h4>Password</h4></td>
				  </tr>
				  <tr>
					  <td><input type="password"name="pass" class="form-control"placeholder="Enter passwod"required /></td>
				  </tr>
				  <tr>
					  <th><input type="submit" class="btn btn-info" style="width:50%;margin-top:3%"value="Log-in"name="login"/></th>
				  </tr>
			  </tbody>
		  </table>
		 </form>
		</div>
		</div>
	</center>
	 <?php
	if(isset($_GET['msg']))
	{
		echo "<center><div class='alert blinking'style='width:40%;background-color:darkgreen'>";
		echo $_GET['msg'];
		echo "</div></center>";
	}
	else if(isset($_GET['error']))
	{
		echo "<center><div class='alert blinking'style='width:40%;background-color:darkred'>";
		echo $_GET['error'];
		echo "</div></center>";
	}
	?>
	</div>
	<?php include'foot.php'?>
</body>
</html>