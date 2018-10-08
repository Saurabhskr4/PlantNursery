<?php
include 'master.php';
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Seller Registeration</title>
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
    49%{    color: transparent; }
    50%{    color: white; }
    99%{    color:transparent;  }
    100%{   color: white;    }
}	

</style>
</head>
<body>
 <div class="conatiner-fluid">
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
	 <div class="jumbotron"style="width:50%;margin-left:25%;border:1px solid white" id="#emp">
       <center><caption><h3 style="margin-top:-20px">Create your account for free</h3></caption></center>
        <div style="height:100%;width:100%;background-color:white">
             <form action="seller_reg_conf.php"method="post"enctype="multipart/form-data">
             <center>
                 <table width="60%">
                   <tr>
                       <td><h4>Company name<span>*</span></h4></td></tr>
                   <tr>
                       <td><input type="text" name="name" class="form-control" placeholder="Enter your company name"required /></td>
                   </tr>
                   <tr>
                       <td><h4>Contact number<span>*</span></h4></td>
                   </tr>
                   <tr>
                       <td><input type="text" name="number" class="form-control" placeholder="Enter your contact number"required /></td>
                   </tr>
                   <tr>
                       <td><h4>Email<span>*</span></h4></td>
                   </tr>
                   <tr>
                       <td><input type="email" name="mail" class="form-control" placeholder="Enter email address" required /></td>
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
							  <option>Are you good enough?</option>
							  <option>Why are you alive?</option>
							  <option>Are you broken?</option>
							</select>
						</td>
					</tr>
					 <tr>
						 <td><h4>Your Answer<span>*</span></h4></td></tr>
					 <tr>
						<td><input type="text"name="sqa" class="form-control"placeholder="Enter your answer"required />
						</td>
					</tr>
					 
                   <tr>
                       <td><h4>Password<span>*</span></h4></td>
                   </tr>
                   <tr>
                       <td><input type="password" name="pass" class="form-control" placeholder="Enter password length=8-20 char" required /></td>
                   </tr>
                   <tr>
                       <td><h4>Password confirmation<span>*</span></h4></td>
                   </tr>
                   <tr>
                       <td><input type="password" name="pass1" class="form-control"placeholder="Re-type password" required /></td>
                   </tr>
                   <tr>
                       <td><input type ="submit"class="btn btn-info form-control" style="margin-top:6%" value="Register" name="register"/></td>
                   </tr>
               </table>
               </center>
         </form>
	</div>	
  </div>
</div>
</body>
</html>