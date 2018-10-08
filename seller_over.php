<?php
$user=$_COOKIE['user'];
if($user=="")
{
	header("location:login1.php?msg=Login first");
}
else
{
	$con=mysqli_connect("127.0.0.1","root","","jobportaldata");
	$sel="SELECT * FROM cmpprofile WHERE email='$user'";
	$res=mysqli_query($con,$sel);
		if($one=mysqli_fetch_assoc($res))
		{
			$name=$one['cname'];
			$est=$one['easted'];
			$type=$one['ctype'];
			$ppl=$one['people'];
			$web=$one['website'];
			$country=$one['country'];
			$srt=$one['street'];
			$zip=$one['zip'];
			$city=$one['city'];
			$cont=$one['contact'];
			$bk=$one['backgroud'];
			$ser=$one['services'];
			$exp=$one['expertise'];
			$logo=$one['logo'];
			$loc="uploads/";
			$q="select * from postjob where email=$user";
			if(mysqli_query($con,$q))
			{
				$sghkdf=90;
			}
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
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css"href="class.css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
<div class="alert"></div>
<div style="conatiner-fluid">
	<?php 
	echo "<div style='height:100%;width:80%;margin-left:5%'>
		<div style='width:100%;height:10%'><center><img src='" . $loc . $logo . "'  style='height:10%; width:40%'alt='Company logo'/></center></div>
		<div style='width:100%;height:10%'><center><h2 class='text-uppercase'>  $name </h2> <span class='fa fa-pin'></span>$zip  $city $srt  $country | <span class='fa fa-phone'> </span> $cont <center></div>
		<div style='width:100%;height:15%'><table style='width:100%;margin-top:1%'><tr> <th>Established in:</th><th>Type</th><th>People </th><th>Website</th></tr>
				<tr><td>$est</td><td>$type</td><td>$ppl</td><td><a href='#'>$web</td></tr></table>
		</div>
		<div style='width:100%;height:15%'>
			<h3>Company backgroud</h3>
			$bk
		</div>
		<div style='width:100%;height:15%'>
			<h3>Services</h3>
			$ser
		</div>
		<div style='width:100%;height:15%'>
			<h3>Expertise</h3>
			$exp
		</div>
		</div>
	</div>";
	?>
</div>
</body>
</html>