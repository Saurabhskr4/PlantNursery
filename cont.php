<?php
include 'master.php';
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="classes.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<title>Log-in</title>

</head>
<body>
<?php 
if(isset($_GET['msg']))
{
	echo "<div class='alert alert-info' style='width:40%'><cenetr>";
	echo $_GET['msg'];
	echo "</center></div>";
}
?>
<div class="container-fluid"style="margin:0px;padding:0px">
	   <center><h2 >Contact us for help</h2>
           <?php
           include'underline.php';
           ?>
	   <div class="second" style="border:none">
		  <div class="secondleft">
		      <form action="gardener_confirm.php" method="get">
		          <table>
                        <tr>
                            <td>Name</td><td>Contact</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text"name="name1" style="width:200px"class="form-control"placeholder="Enter your name"required />
                            </td>
                            <td>
                                <input type="number"name="mail1" style="width:200px"class="form-control" min="1"  placeholder="Enter email address"  required />
                            </td>
                        </tr>
                        <tr> 
                            <td colspan=2 class="textarea">Message</td>
                        </tr>
                        <tr>
                            <td colspan=2><textarea rows="10"style="width:400px"placeholder="Enter your feedback/suggestion"name="msg" class="form-control"required ></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-info"value="Send Message" name="feedback"style="margin-top:20px;"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
           <div class="secondc"style="margin:0% 5% 5% 5%;"></div>
		   <div class="secondright"style="float:left">
				<h4>Address</h4>
				<p class="text-capitalize">Vill Diguria I.I.M. Road PO Box 226020<br/>LUCKNOW</p>
				<h4>Email</h4>
				<mark>randompro@gmail.com</mark><br/>
				<h4>Phone number</h4>
				<mark>+91 908888333</mark>
				<h4>Social networking</h4>
				<span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-instagram"></span>
			</div>
        </div>
        </center>
</div>
<?php include'foot.php';?>
</body>
</html>