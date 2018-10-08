<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="class.css"/>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<style>

</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px">
 <div style="height:100%;width:100%;position:relative">
 <?php
	 $mail=$_COOKIE['user'];
	 $con=mysqli_connect("127.0.0.1","root","","nursery");
	 $q1="SELECT * FROM cart WHERE email='$mail'";
	 if($res=mysqli_query($con,$q1))
	 {
		 if(mysqli_num_rows($res)>0)
		 {
			while($row=mysqli_fetch_assoc($res))
			{
				$id=$row['id'];
				if($id>999)
				{
					$sql="SELECT * FROM tool WHERE id='$id'";
					$loc="pictures/tools/";
						$loc="pictures/tools/";
						if($res=mysqli_query($con,$sql))
						{
							if(mysqli_num_rows($res)>0)
							{
								while($row=mysqli_fetch_assoc($res))
								{
										$n=$row['name'];
										$price=$row['price'];
										$stk=$row['stock'];
										$from=$row['cname'];
										$id=$row['id'];
										$pic=$row['pic1'];
										if($id==1000)
										{
											echo "<center><div class='alert alert-warning' style='width:50%;text-align:center'>EMPTY</div></center>";
										}
										else
										{
											echo "
										<div style='width:20%;height:25%;border:1px solid white; margin:2%;float:left; border-radius:5%'>
										<center>
											<div style='width:60%;height:100px;'>
												<a href='look.php?id=$id'><img src='".$loc .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
											</div>
											<h5>$n &nbsp&#8377 <mark>$price</mark></h5>
											<h5>Sold by<mark>$from</mark></h5>
											<h5>remaining in Stock<mark>$stk</mark></h5>
											<a href='cartlook.php?id=$id'>
												<button class='btn btn-responsive btn-md btn-success hovering'>Buy now</button>
											</a>
										</center> 
									</div>";
										}
								}
							}
						}

				}
				else
				{
					$sql="SELECT * FROM plants WHERE id='$id'";
					$loc="pictures/";
					$loc="pictures/";
					if($res=mysqli_query($con,$sql))
					{
						if(mysqli_num_rows($res)>0)
						{
							while($row=mysqli_fetch_assoc($res))
							{
							$n=$row['name'];
							$var=$row['var'];
							$age=$row['age'];
							$price=$row['price'];
							$stk=$row['stock'];
							$from=$row['cname'];
							$age=$row['age'];
							$id=$row['id'];
							$pic=$row['pic1'];
							echo "
							<div style='width:20%;height:25%;border:1px solid white; margin:2%;float:left; border-radius:5%'>
								<center>
									<div style='width:60%;height:100px;'>
										<a href='look.php?id=$id'><img src='".$loc .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
									</div>

									<h5>$n <mark>$var</mark>&nbsp&#8377 <mark>$price</mark></h5>
									<h5>Sold by<mark>$from</mark></h5>
									<h5><mark>$stk</mark> in Stock</h5>
									<h5><mark>$age</mark>days old</h5>
									<a href='cartlook.php?id=$id'>
										<button class='btn btn-responsive btn-md btn-success'>Buy now</button>
									</a>
								</center> 
							</div>";
							}
						}
					}

				}
			}
		 }
		 else
		 {
			 echo "<center><div class='alert alert-danger text-capitalize' style='width:50%;margin-top:10%;font-family:lucida handwriting;font-size:200%'>Your cart is empty</div></center>";
		 }
	 
	 }
	 else
	 {
		 echo mysqli_error($con);
	 }
	 
 ?>
	  </div>
    </div>
	</body>
</html>