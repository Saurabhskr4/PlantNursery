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
td h4 span{
	color:red;
}
.blinking{
    animation:blinkingText 3s infinite;
	}
@keyframes blinkingText{
    0%{     color: white;    }
    20%{    color: transparent; }
    40%{    color: white; }
    60%{    color:transparent;  }
    80%{    color:floralwhite;  }
    100%{    color:transparent;  }
}
</style>
</head>
<body>
 <div class="conatiner-fluid">
	 	 	 <?php
		if(isset($_GET['msg']))
		{
			echo "<center><div class='alert blinking'style='width:30%;background-color:darkgreen'>".$_GET['msg']."</div></center>";
		}	
		if(isset($_GET['error']))
		{
			echo "<center><div class='alert alert blinking'style='width:30%;background-color:red'>".$_GET['error']."</div></center>";
		}
	 ?>
 <div class="jumbotron"style="width:50%;margin-left:25%;" id="#emp">
   <center><caption><h3 style="margin-top:-20px">register for free</h3></caption></center>
    <div style="width:100%;height:100%;background-color:white">
	 <center>
     <form action="cstregconf.php"method="get">
	 <table width="70%">
	  <tr>
          <td><h4>Name<span>*</span></h4></td>
      </tr>
	  <tr>
          <td><input type="text"name="name" class="form-control" placeholder="Enter your name"required /></td>
      </tr>
	  <tr>
          <td><h4>Last name<span>*</span></h4></td>
      </tr>
	  <tr>
          <td><input type="text"name="lanme" class="form-control" placeholder="Last name"required /></td>
      </tr>
      <tr>
          <td><h4>Email<span>*</span></h4></td></tr>
	  <tr>

          <td><input type="email"name="mail" class="form-control" placeholder="Enter email address" required /></td>
      </tr>
	<tr>
          <td><h4>Security question<span>*</span></h4></td></tr>
	 <tr>
	<tr>
		<td>
			<select class="form-control" name="sq">
			  <option>--YOUR SECURITY QUESTION--</option>
			  <option>What is my pet name?</option>
			  <option>Which is my favourite book?</option>
			  <option>What you prefer to drink?</option>
			  <option>Do you smoke air?</option>
			  <option>Are you good enough to live?</option>
			  <option>Are you soft hearted?</option>
			  <option>Why are you alive?</option>
			  <option>Are you broken?</option>
			</select>
		</td>
	</tr>
	 <tr>
          <td><h4>Your Answer<span>*</span></h4></td></tr>
	 <tr>
	<tr>
		<td><textarea name="sqa" class="form-control"placeholder="Enter your answer"required rows="1"></textarea>
		</td>
	</tr>
	  <tr>
          <td><h4>Password<span>*</span></h4></td></tr>
	  <tr>
          <td><input type="password"name="pass" class="form-control" placeholder="Enter password length=8-20 char" required /></td>
      </tr>
	  <tr>
          <td><h4>Password confirmation<span>*</span></h4></td>
      </tr>
      <tr>
          <td><input type="password"name="pass1" class="form-control"placeholder="Re-type password" required /></td>
      </tr>
      <tr>
          <td><input type ="submit"class="btn btn-info form-control" style="margin-top:6%" value="Register" name="register"/></td>
      </tr>
     </table>
     </form>
    </center>
	</div>
  </div>
</div>
</body>
</html>