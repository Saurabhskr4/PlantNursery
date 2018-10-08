<!doctype html>
<html lang="en-us">
<head>
<title>Admin</title>
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
<body>
<?php
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if(isset($_GET['num']))
	{
		$n=$_GET['num'];
		$one="SELECT zip FROM feed WHERE rnum='$n'";
		$res=mysqli_query($con,$one);
		if($cmp=mysqli_fetch_assoc($res))
		{
			//grtting zip of requesting body
			
			$z=$cmp['zip'];
		}
		$zp=$z-15;
		$zf=$z+15;
		$two="SELECT * FROM gardener";
		if($res=mysqli_query($con,$two))
		{
			while($cmp=mysqli_fetch_assoc($res))
			{
				$n=$cmp['name'];
				$cnt=$cmp['contact'];
				$zip=$cmp['zip'];
				
				//gardener zip to find locally avilable gardeners.
				
				for($i=$z;$i>=$zp;$i--)
				{
					if($zip==$i)
					{
						$sql="UPDATE feed SET status=1 WHERE rnum='$n'";
						if(mysqli_query($con,$sql))
						{
							header("location:status.php?mgs=Request confirmed. We will contact you for service");
						}
					}
					else
					{
						for($i=$z;$i>=$zf;$i++)
						{
							if($zip==$i)
							{
								$sql="UPDATE feed SET status=1 WHERE rnum='$n'";
								if(mysqli_query($con,$sql))
								{
									header("location:status.php?mgs=Request confirmed. We will contact you for service");
								}
							}
							else
							{
								header("location:status.php?error=Request failed 
									   Gardener not avilable ");
							}
						}
					}
				}
			}
		}
	}
?>
</body>
</html>
 

<?php
//-------++++++********* LOGIC TWO



?>