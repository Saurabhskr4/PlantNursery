<?php
$user=$_COOKIE['user'];
if($user=="")
{
	header("location:login.php?msg=Login first");
}
else
{

	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sql="select * from customer where email='$user'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0)
	{
		if($one=mysqli_fetch_assoc($res))
		{
			$name=$one['name'];
			$lname=$one['lastname'];
			$mail=$one['email'];
			$gen=$one['gender'];
			$city=$one['city'];
			$zip=$one['zip'];
			$street=$one['street'];
			$country=$one['state'];
			$ph=$one['phone'];
		}
	}
}
?>
<!doctype html>
<html lang="en-us">
<head>
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
<div class="conatiner-fluid"> 
    <div class="injumbo2" style="margin:50px;background-color:white">
     <table style="width:60%">
			<tbody>
					<tr>
						<td><h4>First name:</h4></td>
						<td><?php echo $name ;?></td>
					</tr>
					<tr>
						<td><h4>Last name:</h4></td>
						<td><?php echo $lname ;?></td>
					</tr>
					<tr>
						<td><h4>E-mail:</h4></td>
						<td><?php echo $mail ;?></td>
					</tr>
					<tr>
						<td><h4>Gender</h4></td>
						<td><?php echo $gen ;?></td>
					</tr>
					<tr>
						<td><h4>Country</h4></td>
						<td><?php echo $country ;?></td>
					</tr>
					<tr>
						<td><h4>City/town</h4></td>
						<td><?php echo $city ;?></td>
					</tr>
					<tr>
						<td><h4>Street</h4></td>
						<td><?php echo $street ;?></td>
					</tr>
					<tr>
						<td><h4>Zip code</h4></td>
						<td><?php echo $zip ;?></td>
					</tr>
					<tr>
						<td><h4>Phone</h4></td>
						<td><?php echo $ph ;?></td>
					</tr>
				</tbody>
			</table>
	  </div>
	</div>
</html>