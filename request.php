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
if(isset($_GET['msg']))
{
	echo "<div class='alert alert-info' style='width:40%'><cenetr>";
	echo $_GET['msg'];
	echo "</center></div>";
}
else if(isset($_GET['error']))
{
	echo "<div class='alert alert-danger'style='width:40%'><cenetr>";
	echo $_GET['error'];
	echo "</center></div>";
}
$con=mysqli_connect("127.0.0.1","root","","nursery");
$one="SELECT * FROM feed";
if($res=mysqli_query($con,$one))
{
	if(mysqli_num_rows($res)>0)
	{
		while($cmp=mysqli_fetch_assoc($res))
		{
            $n=$cmp['name'];
            $mail=$cmp['user'];
            $num=$cmp['rnum'];
            echo "
				<div style='width:18%;height:20%;border:1px solid black;float:left;margin:1%;border-radius:10%'>
                    <span><h4>$n</h4>has requested for the gardener service</span>
					<center>
                    <h4>
						<a href='request_confirmation.php?num=$num'style='color:blue;'>View |</a>
						<a href='del_request_confirm.php?num=$num'style='color:blue;'>Delete </a>
					</h4>
					</center>
                </div>";
		}
	}
}
?>
</body>
</html>