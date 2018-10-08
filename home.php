<?php
    include 'master.php';
    $con=mysqli_connect("127.0.0.1","root","","nursery");
    $loc="pictures/";
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="class.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<style>
.main{
	height:780px;
	width:100%;
}
.bg{
	height:740px;
	width:100%;
	margin-top: -20px;
	background-image:url("3.jpg");
	background-repeat:none;
	background-size:100% 100%;
}
option{
	color:black;
}
</style>
</head>
<body>
	<div class="container-fluid bg"style="margin:0px;padding:0px">
		<div class="bg" style="color:white;">
			<div style="width:100%;height:5%;position:fix;font-size:250%;color:white;padding-top:20%;text-shadow:2px 2px 6px black;font-family:Segoe Print"class="text-capitalize">
				<center style="">Make your garden beautiful</center>
			</div>	
            <div style="width:100%;height:5%;margin-top:10%;position:fix;font-size:200%;color:white;text-shadow:2px 2px 6px black;font-family:Lucida Handwriting "class="text-capitalize">
				<center>find your favorite plant</center>
			</div>
			<form action="search.php">
				<div style="width:55%;margin-top:3%;margin-left:25%;position:relative;background:none;">
					<center>
						<input type ="text"style="width:80%;border:1px solid white ;border-radius:20px 0px 0px 20px; background:none; float:left; color:white" name="plant" class="form-control"placeholder="Search by name of plant"/>
		
						<button type="submit" style="width:10%; float:left; border-top:1px solid white; border-right:1px solid white; border-bottom:1px solid white; border-radius:0% 20px 20px 0%; background:none; color:white; float:left" class="form-control"name="submit"><span class="fa fa-search"></span></button>
					</center>
				</div>
			</form>
		</div>
    </div>
<div class="main"style="position:relative;">
		
		<div style="width:100%;height:50%;">
		
		
			<center><h2 class="text-capitalize">best flowering plants</h2></center>


			
			<!-------------------------------------			Here are best selling flowering plants				------------------------------------------------>
			
			<?php
            include 'underline.php';
            $c=0;
            $sel="SELECT * FROM plants WHERE type='flower'";
            if($res=mysqli_query($con,$sel))
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
                                <a href='look.php?id=$id'><img src='".$loc .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
                            </div>
                            <h5>$n &nbsp&#8377 <mark>$price</mark></h5>
                            <h5>Sold by<mark>$from</mark></h5>
                            <h5>remaining in Stock<mark>$stk</mark></h5>
                            <a href='look.php?id=$id'>
                                <button class='btn btn-responsive btn-md btn-success'>Buy now</button>
                            </a>
                        </center> 
                        </div>";
                        if($c>5)
                        {
                            break;
                        }
                    }
                }
            }
			?>	
		</div>
		<div style="width:100%; height:50%;">
			
			<center><h2 class="text-capitalize"> best fruity plants	</h2></center>	

			
			<!-------------------------------------			Here are best selling fruity plants				------------------------------------------------>
						
			<?php 
            include 'underline.php';
			$z=0;
			$sql="SELECT * FROM plants where type='fruit'";
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
                        echo "
                        <div style='width:20%;height:25%;border:1px solid white; margin:2%;float:left; border-radius:5%'>
                        <center>
                            <div style='width:60%;height:100px;'>
                                <a href='look.php?id=$id'><img src='".$loc .$pic ."'class='img-responsive img-rounded' style='width:100%;height:100%'/></a>
                            </div>
                            <h5>$n &nbsp&#8377 <mark>$price</mark></h5>
                            <h5>Sold by<mark>$from</mark></h5>
                            <h5>remaining in Stock<mark>$stk</mark></h5>
                            <a href='look.php?id=$id'>
                                <button class='btn btn-responsive btn-md btn-success'>Buy now</button>
                            </a>
                        </center> 
                    </div>";
                        if($z>5)
                        {
                            break;
                        }
                    }
                }
            }		
            ?>
		</div>
            

	</div>


</body>
<?php
include'foot.php';
?>
</html>