<?php
include'master.php';
?>
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
<title>Online plants nursery</title>
<style>

form table{
font-size:20px;

}
form td{
padding:5%;
}
</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px">
 <div style="height:100%;width:100%;position:relative">
	 <center><h3 style="margin-top:1%;">Search Results</h3></center>
	   <?php
            include 'underline.php';
        ?>
	  <!--------------------------------------------------			SEARCH RESULT					----------------------------------------------------->
	  
	  <?php
	  		$con=mysqli_connect("127.0.0.1","root","","nursery");         
              
			//--------------------------------------------------- 			Home search				--------------------------------------------
			
			if(isset($_GET['submit']))
			{
			
				$tn=$_GET['plant'];
				$sql="SELECT * FROM plants WHERE name='$tn' ";
                $loc="pictures/";
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
							$age=$row['age'];
							$id=$row['id'];
							$pic=$row['pic1'];
							echo "
							<div style='width:20%;height:25%;border:1px solid white; margin:2%;float:left; border-radius:5%'>
							<center>
								<div style='width:60%;height:100px;'>
									<a href='look.php?id=$id'><img src='".$loc .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
								</div>
								<h5>$n &nbsp&#8377 <mark>$price</mark></h5>
								<h5>Sold by<mark>$from</mark></h5>
								<h5><mark>$stk</mark>in Stock</h5>
								<h5><mark>$age</mark>days old</h5>
								<a href='look.php?id=$id'>
									<button class='btn btn-responsive btn-md btn-success'>Buy now</button>
								</a>
							</center> 
						</div>";
						}
					}
					
		//*************/************/ WHEN SEARCHING FOR THE TOOL  **************/**************//			
					
					else 
					{
						$l="pictures/tools/";
						$s="SELECT * FROM tool WHERE name='$tn' ";
						if($res=mysqli_query($con,$s))
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
										echo "
										<div style='width:20%;height:25%;border:1px solid white; margin:2%;float:left; border-radius:5%'>
										<center>
											<div style='width:60%;height:100px;'>
												<a href='look.php?id=$id'><img src='".$l .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
											</div>
											<h5>$n &nbsp&#8377 <mark>$price</mark></h5>
											<h5>Sold by<mark>$from</mark></h5>
											<h5>remaining in Stock<mark>$stk</mark></h5>
											<a href='look.php?id=$id'>
												<button class='btn btn-responsive btn-md btn-success'>Buy now</button>
											</a>
										</center> 
									</div>";
								}
							}
							
		//**********/***********/ NO RESULTS FOUND /**********/***************//
							
							else 
							{
								echo "<center style='font-size:20px'><div class='alert alert-warning'style='width:30%;color:green'>SORRY ! UNABLE TO FIND ANY PLANTS RELATED YOUR SEARCH </div></center>";
							}
						
						}
					}
				}
				
			}
			else
			{
				echo "<center style='font-size:20px'><div class='alert alert-warning'style='width:30%;color:green'>SORRY ! UNABLE TO FIND ANY PLANTS RELATED YOUR SEARCH </div></center>";
			}

	?> 
		 
    </div>
    </div>
	<?php
          include 'foot.php';
        ?>
    </body>
</html>