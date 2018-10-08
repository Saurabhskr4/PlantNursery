<?php
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
					<a href='look.php?id=$id'>
						<button class='btn btn-responsive btn-md btn-success'>Buy now</button>
					</a>
					<a href='local.php?name=$n'>
						<button class='btn btn-responsive btn-md btn-warning'>View this</button>
					</a>
				</center> 
			</div>";
			}
		}
	}
?>