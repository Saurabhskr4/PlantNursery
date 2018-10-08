<?php
session_start();
if($_SESSION['suser']=="")
{
	header("location:login1.php?msg=login first");
}
else
{
	include'master.php';
}
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
<title>Online plant nuresy</title>
<style>
a{
 color:white;
}
td a div:hover{
 color:white;
}

</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px;">
 <div style="height:100%; width:100%">
   <?php
	 $mail=$_COOKIE['user'];
	 $con=mysqli_connect("127.0.0.1","root","","nursery");
	 if(isset($_GET['id']))
	 {

		//##################----------      PRODUCT DETAILES FROM DATABASE     -----------#################

		$identity=$_GET[id];
		if($n<1000)
		{
			$sql="SELECT * FROM plants WHERE id =$identity";
			$res=mysqli_query($con,$sql);
			if($row=mysqli_fetch_assoc($res))
			{
				$n=$row['name'];
				$var=$row['var'];
				$age=$row['time'];
				$price=$row['price'];
				$stk=$row['stock'];
				$from=$row['cname'];

			}
		}
		else
		{
			$sql="SELECT * FROM tool WHERE id =$identity";
			$res=mysqli_query($con,$sql);
			if($row=mysqli_fetch_assoc($res))
			{
				$n=$row['name'];
				$price=$row['price'];
				$stk=$row['stock'];
				$from=$row['cname'];
			}
		}

		//##################----------      BUYER FROM DATABASE     -----------#################
		
		$query1="select * from customer where email='$mail'";
		$res = mysqli_query($con,$query1);
		if(mysqli_num_rows($res)>0)
		{
			if($one=mysqli_fetch_assoc($res))
			{
				$name=$one['name'] ;
				$lname=$one['lastname'] ;
				$zip=$one['zip'] ;
				$city=$one['city'] ;
				$street=$one['street'] ;
				$country=$one['state'] ;
				$phone=$one['phone'] ;
			}
		}
		 
		//##################----------      SELLER FROM DATABASE     -----------#################
		
		$query2="SELECT * FROM seller WHERE cname='$from'";
		$res = mysqli_query($con,$query2) ;
		if(mysqli_num_rows($res)>0)
		{
			if($two=mysqli_fetch_assoc($res))
			{
					$n=$two['cname'];
					$em=$two['email'];
					$cntr=$two['state'];
					$str=$two['street'];
					$z=$two['zip'];
					$ct=$two['city'];
					$cont=$two['contact'];
			}
		}	 
	}
	?>
	 
	 	 <!-- ************ *****************  BUY NOW FORM STARTS HERE **************** ****************** -->
	 <center>
	 <div class="jumbotron" style="margin-left:20px;background-color:white">
		 				<h4><u>Check detailes for your order</u></h4>
		 <form action="buy_confirm.php"method="post"enctype="multipart/form-data">
			<table>
				<tbody>
					<tr>
						<td><h4>Order quntity</h4></td>
						<td><h4>Price<sup style="color:red"> *per unit</sup></h4></td>
					</tr>
					<tr>
						<td><input type="number"class="form-control"name="em01" min="1" /></td>
						
						<!-- simultanious calculations -->
						
						<td><input type="text"class="form-control"name="em02" value="<?php echo "&#8377 $price ";?>" readonly/></td>
					</tr>
					<tr>
						<td><h4>Amount payble</h4></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="text"class="form-control"name="em4"  value="<?php echo "&#8377" ;?>" readonly />
						</td>
												
					</tr>
					<tr>
						<td><h4>Name</h4></td>
						<td><h4>Phone</h4></td>
					</tr>
					<tr>
						<td><input type="text"class="form-control"name="em1" value="<?php echo "$name $lname ";?>" /></td>
						<td>
							<input type="number"name="em12"class="form-control" value="<?php echo $phone ;?>" />
						</td>
					</tr>
					<tr>
						<td><h4>E-mail:</h4></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="email"class="form-control"name="em4"  value="<?php echo $mail ;?>" readonly />
						</td>
												
					</tr>

					<tr>
						<td><h4>Address</h4></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-left:0px">
							<textarea name="em11"class="form-control" rows="3">
								<?php echo "$zip $city $street $country" ;?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td><h4>Seller</h4></td>
						<td><h4>Seller email</h4></td>
					</tr>
					<tr>
						<td>
							<input type="text"name="em11"class="form-control"value="<?php echo $n ;?>"/>
						</td>
						<td>
							<input type="text"name="em12"class="form-control"value="<?php echo $em ;?>"/>
						</td>
					</tr>		
					<tr>
						<td>
							<input type ="submit"class="form-control btn btn-md btn-info" style="margin-top:20px;" value="Place Order" name="em14"/>
						</td>
						<td >
							<a href="look.php?id=<?php echo $identity;?>"><div style="margin-top:20px; height:30px; background-color:darkred;text-align:center;padding:4px">Cancel order</div></a>
						</td>
					</tr>
				</tbody>
			</table>
		 </form>
	</div>	
	 </center>
	 <!-- ************ *****************  BUY NOW FORM ENDS HERE **************** ****************** -->
  </div>
  </div>  
	<?php
		include 'foot.php';
	?> 
</body>
</html>