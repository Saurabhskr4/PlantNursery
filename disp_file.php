<?php
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
						<a href='look.php?id=$id'>
							<button class='btn btn-responsive btn-md btn-success hovering'>Buy now</button>
						</a>
						<a href='local.php?id=$id'>
							<button class='btn btn-responsive btn-md btn-warning hovering'>View this</button>
						</a>
					</center> 
				</div>";
					}
			}
		}
	}
?>