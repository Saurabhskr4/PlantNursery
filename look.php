<?php
include'master.php';
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="widh" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="class.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="jquery.js"></script>

<title>Online plant nursery</title>
<style>
a{
	color:white;
}
a  button:hover{
	color:lightblue;
	border-radius: 40%;
}
.hovering:hover{
    animation:hover 1s 1;
}
@keyframes hover{
    0%{   border-radius: 0% }
    100%{   border-radius: 40% }
}
</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px;">
 <div style="height:100%; width:100%">
   <?php
    if(isset($_GET['id']))
    {
        $con=mysqli_connect("127.0.0.1","root","","nursery");
        $i=$_GET['id'];
		$loc="pictures/tools/";
		$sql="SELECT * FROM tool where id='$i'";
		if($res=mysqli_query($con,$sql))
		{
			if(mysqli_num_rows($res)>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					$n=$row['name'];
					$var=$row['var'];
					$age=$row['time'];
					$price=$row['price'];
					$stk=$row['stock'];
					$age=$row['age'];
					$id=$row['id'];
					$pic1=$row['pic1'];
					$pic2=$row['pic2'];
					echo "<center>
						<div style='width:40%;height:40%;border:1px solid white;margin-left:30%;float:left; border-radius:5%'>

							<div style='width:100%;height:400px;'>
								<img src='".$loc .$pic1 ."'class='img-responsive img-rounded' style='height:100%' id='zoom'/>
							</div>
							<h4>$n &nbsp&#8377 <mark>$price</mark></h4>
							<h4>Sold by<mark>$from</mark></h4>
							<h4>remaining in Stock<mark>$stk</mark></h4>
							<h3>Description</h3>
							<h4>$des</h4>
							<a href='buy.php?id=$id'>
								<button class='btn btn-responsive btn-md btn-success hovering'>Buy now</button>
							</a>
							<a href='cart.php?id=$id'>
								<button class='btn btn-responsive btn-md btn-warning hovering'>Add to cart</button>
							</a>
						</div>
					</center>";
				}
			}
			
			else 
			{
				$loc="pictures/";
				$sql="SELECT * FROM plants where id=$i";
				if($res=mysqli_query($con,$sql))
				{
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							$n=$row['name'];
							$var=$row['var'];
							$age=$row['time'];
							$price=$row['price'];
							$stk=$row['stock'];
							$from=$row['cname'];
							$age=$row['age'];
							$id=$row['id'];
							$pic1=$row['pic1'];
							$pic2=$row['pic2'];
							echo "<center>
								<div style='width:40%;height:40%;border:1px solid white;margin-left:30%;float:left; border-radius:5%'>

							<div style='width:100%;height:400px;border:none;background:none'>
								<img src='".$loc .$pic1 ."'class='img-responsive img-rounded' style='height:100%'/>
							</div>
							<h4>$n &nbsp&#8377 <mark>$price</mark></h4>
							<h4>Sold by<mark>$from</mark></h4>
							<h4>remaining in Stock<mark>$stk</mark></h4>
							<h3>Description</h3>
							<h4>$des</h4>
							<a href='buy.php?id=$id'>
								<button class='btn btn-responsive btn-md btn-success hovering'>Buy now</button>
							</a>
							<a href='cart.php?id=$id'>
								<button class='btn btn-responsive btn-md btn-warning hovering'>Add to cart</button>
							</a>
						</div>
					</center>";
						}
					}
				}
			}
		}
	}    
?>

  </div>
  </div>
<?php
	include 'foot.php';
?> 
</body>
</html>