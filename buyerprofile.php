<?php
$mail=$_COOKIE['user'];
$con=mysqli_connect("127.0.0.1","root","","nursery");
$query="select * from customer where email='$mail'";
$res = mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
	if($row=mysqli_fetch_assoc($res))
	{
		$name=$row['name'] ;
		$lname=$row['lastname'] ;
		$email=$row['email'] ;
		$gen=$row['gender'] ;
		$zip=$row['zip'] ;
		$city=$row['city'] ;
		$str=$row['street'] ;
		$cnt=$row['state'] ;
		$ph=$row['phone'] ;
		$profile=$row['profile'] ;
	}
}


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
.combine{
	dispaly:inline;
}
	table tbody tr td{
		width: 40%;
	}
</style>
</head>
<body>
 <div class="conatiner-fluid"style="margin:0px;padding:0px">
   <caption><h2 style="margin-left:20px">Profile</h2></caption>

    <div class="injumbo2" style="margin-left:20px;background-color:white">
     <form action="cst_profile_conf.php"method="post"enctype="multipart/form-data">
		<table style="width:50%">
			<tbody>
				<tr>
					<td><h4>First name:</h4></td>
					<td><h4>Last name:</h4></td>
				</tr>
				<tr>
					<td><input type="text"class="form-control"name="em1" value="<?php echo $name ;?>" /></td>
					<td><input type="text"class="form-control"name="em2" value="<?php echo $lname ;?>" /></td>
				</tr>
				<tr>
					<td><h4>Gender</h4></td>
					<td><h4>E-mail:</h4></td>
				</tr>
				<tr>
					<td><select name="em7"class="form-control"><option><?php echo $gen ;?></option><option >Male</option><option>Female</option></select></td>
					<td><input type="email"class="form-control"name="em4" placeholder="Enter your email address" value="<?php echo $mail ;?>" readonly /></td>
				</tr>
				<tr>
					<td><h4>State</h4></td>
					<td><h4>City/town</h4></td>

				</tr>
				<tr>
					<td><input type="text"name="em11"class="form-control"value="<?php echo $cnt ;?>" /></td>
					<td><input type="text"name="em8"class="form-control"value="<?php echo $city;?>" /></td>

				</tr>				
				<tr>
				<td><h4>Zip code</h4></td>
				<td><h4>Street</h4></td>
				</tr>
				<tr>
					<td><input type="number"name="em9"class="form-control"value="<?php echo $zip ;?>" /></td>
					<td><input type="text"name="em10"class="form-control"value="<?php echo $str ;?>" /></td>
				</tr>
				<tr>
				<td><h4>Phone</h4></td>
				<td><h4>Profile picture</h4></td>
				</tr>
				<tr>
					<td><input type="number"name="em12"class="form-control" value="<?php echo $ph ;?>" /></td>
					<td> <input type="file" name="pic"class="form-control" /> </td>
				</tr>		
			<tr>
				<td><input type ="submit"class="form-control btn btn-info" style="margin-top:20px;" value="Update" name="em14"/></td>
				<td><input type ="Reset"class="form-control btn btn-danger" style="margin-top:20px;" value="Clear"/></td>
			</tr>
		</tbody>
		</table>
	 </form>
	</div>	
  </div>
 </body>
</html>