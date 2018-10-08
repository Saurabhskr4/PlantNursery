<?php
//$time=$_COOKIE['time'];
$con=mysqli_connect("127.0.0.1","root","","nursery");
$query="select * from admin";
$res = mysqli_query($con,$query) ;
if(mysqli_num_rows($res)>0)
{
	if($row=mysqli_fetch_assoc($res))
	{
		$name=$row['name'] ;
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
<body>
 <div class="conatier">
    <div class="alert"style="margin-top:20%;width:100%">
        <strong style="font-family:Lucida Calligraphy;font-size:200%">Welcome <?php echo $name;?></strong>
    </div>
</div>
</body>
</html>