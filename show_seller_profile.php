<?php
$user=$_COOKIE['user'];
if($user=="")
{
	header("location:login1.php?msg=Login first");
}
else
{
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$sel="SELECT * FROM seller WHERE email='$user'";
	$res=mysqli_query($con,$sel);
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
			$logo=$one['logo'];
			$loc="uploads/";
		}
	}
?>
<!doctype html>
<html lang="en-us">
<head>
<title>Profile</title>
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
<div style="conatiner-fluid">
    <?php
	echo "<div style='height:100%;width:80%;margin-left:5%'>
		      <div style='width:100%;height:10%'>
                  <center><img src='" . $loc . $logo . "'  style='height:10%; width:40%;margin-top:5%'alt='Company logo'/></center>
              </div>
		      <div style='width:100%;height:10%'>
                  <center>
                      <h2 class='text-uppercase'> $name</h2><span class='fa fa-pin'></span>$zip  $city $srt  $country | <span class='fa fa-phone'> </span> $cont
                  </center>
              </div>
		      <div style='width:100%;height:15%'>
                <table style='width:100%;margin-top:1%'>
                    <tr> 
                        <th>Established in:</th>
                        <th>People </th>
                    </tr>
                    <tr>
                        <td>$est</td>
                        <td>$ppl</td>
                    </tr>
                </table>
            </div>
		<div style='width:100%;height:15%'>
            <h3><u>Company backgroud</u></h3>
			$bk
		</div>
		<div style='width:100%;height:20%'>
			<h3>Plats offered at <b>$name</b></h3>
			<div style='width:100%; height:60%;'>";
			$mail=$_COOKIE['user'];
			$con=mysqli_connect("127.0.0.1","root","","nursery");
			$one="SELECT * FROM plants where from='$mail'";
            $loc="pictures/";
				if($res=mysqli_query($con,$one))
				{
					if(mysqli_num_rows($res)>0)
					{
						while($cmp=mysqli_fetch_assoc($res))
						{
							$n=$cmp['name'];
							$var=$cmp['var'];
							$stk=$cmp['stock'];
							$type=$cmp['type'];
							$mrp=$cmp['price'];
							$des=$cmp['description'];
							$age=$cmp['time'];
							$pic=$cmp['pic1'];
                            echo "<div style='width:30%;height:50%;border:1px solid black;float:left;margin:1%'>
                                <img src='".$loc .$pic ."'/>
                            </div>";
						}
					}
				}	
			echo "</div>
		</div>
	</div>";
	?>
</div>
</body>
</html>