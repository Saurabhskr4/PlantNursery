<?php
$mail=$_COOKIE['user'];
$con=mysqli_connect("127.0.0.1","root","","nursery");
$query="SELECT * FROM seller WHERE email='$mail'";
$res = mysqli_query($con,$query) ;
if(mysqli_num_rows($res)>0)
{
	if($one=mysqli_fetch_assoc($res))
	{
			$name=$one['cname'];
			$est=$one['easted'];
			$ppl=$one['people'];
			$country=$one['state'];
			$srt=$one['street'];
			$zip=$one['zip'];
			$city=$one['city'];
			$cont=$one['contact'];
			$bk=$one['background'];
	}
}
?>

<!doctype html>
<html lang="en-us">
<head>
<title>Update profile</title>
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
</style>
</head>
<body>
 <div class="conatiner-fluid"style="margin:0px;padding:0px">
     <caption><h2 ><u>Profile</u></h2></caption>
   </div>
    <div class="injumbo2" style="margin-left:20px">
     <form action="seller_profile_conf.php"method="post"enctype="multipart/form-data">
		<table >
				<tbody>
					<tr>
						<td><h4>Company name:</h4></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text"class="form-control"name="cp1" value="<?php echo $name ;?>" /></td>
					</tr>
					<tr>
						<td><h4>Established in:</h4></td>
                        <td><h4>People</h4></td>
				   </tr>
					<tr>
						<td><input type="date"class="form-control"name="cp2" value="<?php echo $est;?>"/></td>
                        <td><input type="text"name="cp4"class="form-control"placeholder="Number of people working" value="<?php echo $ppl ;?>"/></td>
						
					</tr>
					<tr>
						<td><h4>State</h4></td>
						<td><h4>Street</h4></td>
					</tr>
					<tr>
						<td><input type="text"name="cp6"class="form-control"placeholder="Enter your country" value="<?php echo $country ;?>"/>
						</td>
						<td><input type="text"name="cp7"class="form-control"placeholder="Enter Street" value="<?php echo $srt ;?>"/></td>
					</tr>	
					<tr>
						<td><h4>Zip code</h4></td>
						<td><h4>City/town</h4></td>
					</tr>
					<tr>
						<td><input type="number"name="cp8"class="form-control"placeholder="zip code" value="<?php echo $zip ;?>"/></td>
						<td><input type="text"name="cp9"class="form-control"placeholder="Enter city/town" value="<?php echo $city ;?>"/></td>
					</tr>
					<tr>
						<td><h4>Contact</h4></td>
						<td><h4>Email</h4></td>
					</tr>
					<tr>
						<td><input type="text"name="cp10"class="form-control"placeholder="contact number" value="<?php echo $cont ;?>"/></td>
						<td><input type="email"name="cp11"class="form-control" value="<?php echo $mail;?>" readonly /></td>
					</tr>
					<tr>
						<td colspan="2"><h4>Copmany Background</h4></td>
					</tr>
					<tr>
						<td colspan="2"><textarea name="cp12"rows="6"class="form-control"><?php echo $bk ;?></textarea></td>
					</tr>		
					<tr>
						<td colspan="2"><h4>Chose company logo</h4></td>
					</tr> 
					<tr>
						<td colspan="2"><input type="file"name="logo"class="form-control" /></td>
					</tr>
					<tr>
						<td><input type ="submit"class="form-control btn btn-info" value="Update" name="updating"/></td>
						<td><input type ="Reset"class="form-control btn btn-danger" value="Cancel"/></td>
					</tr>
				</tbody>
			</table>
		</form>
    </div>
 </body>
</html>