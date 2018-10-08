<?php
include 'master.php';
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Log-in</title>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<link rel="stylesheet" type="text/css"href="classes.css"/>
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
    0%{     color: whitesmoke;    }
    49%{    color: darkred; }
    50%{    color: white; }
    100%{   color: darkred;    }
}
.hovering:hover{
    animation:hover 4s 10 alternate;
	border:1px solid lightcyan;
}
@keyframes hover{
    0%{   background-color: lightgreen;
		 border-radius: 0%;
	}
    100%{   background-color: green;
			border-radius: 50%;
	}
}

</style>
</head>
<body>

<div class="container-fluid"style="margin:0px;padding:0px;">
	<center>
	<div class="jumbotron" style="width:40%;margin-top:5%;box-shadow:4px 4px grren">
		<div style="background-color:white;">
		 <form action="login_confirm.php"method="get">
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
					  <td><a href="forgot.php" style="display:block;float:right;color:blue" name="password">Forgot password ?</a></td>
				  </tr>
				  <tr>
					  <td ><center><input type="submit"class="btn hovering"  style="margin-top:3%;width:40%"value="Log-in"name="login"/></center></td>
				  </tr>
			  </tbody>
		  </table>
		 </form>
		</div>
		</div>
	    Not yet registered ?click<span class="fa fa-hand-o-right"></span><a href="register.php"style="color:blue">To register </a>
		<br/>
	    Administrator log-in <span class="fa fa-hand-o-right"></span><a href="admin_login.php"style="color:blue" >Admin ?</a>

	</center>
	 	<?php
	if(isset($_GET['msg']))
	{
		echo "<center><div class='alert blinking'style='width:30%;background-color:red'>";
		echo $_GET['msg'];
		echo "</div></center>";
	}
	else if(isset($_GET['error']))
	{
		echo "<center><div class='alert blinking'style='width:30%;background-color:red'>";
		echo $_GET['error'];
		echo "</div></center>";
	}
	?>s
	</div>
	<?php include'foot.php'?>
</body>
</html>