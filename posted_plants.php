<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="class.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>
<?php 
	$mail=$_COOKIE['user'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	$one="SELECT * FROM plants where mail='$mail'";
    $loc="pictures/";
	if(isset($_GET['msg']))
	{
	  echo "<center><div class='alert alert-success'style='color:darkgreen;width:40% ;margin-top:40px'>";
	  echo $_GET['msg'];
	  echo "</div></center>";
	}
	if($res=mysqli_query($con,$one))
	{
		if(mysqli_num_rows($res)>0)
		{
			while($cmp=mysqli_fetch_assoc($res))
			{
				$n=$cmp['cname'];
				$plant=$cmp['name'];
				$stk=$cmp['stock'];
				$id=$cmp['id'];
				$pr=$cmp['price'];
                $pic=$cmp['pic1'];
				echo "<div style='width:22%;height:20%;float:left;margin:1%;'>
                        <center>
                            <div style='width:40%;height:60px'><img src='".$loc .$pic ."' class='img-circle'style='width:100%;height:100%'/></div>
                            <h4>Name : $plant</h4>
                            <h4>
                                <mark>Stock : $stk</mark>
                            </h4>
                            <h4>
                                <mark>Price :$pr</mark>
                            </h4>
                            <h4>
							<form action='update_plant.php?'>

                                    <button type='submit'class='btn btn-md btn-success'name='update'value='$id'>Update
                                </a>
								</form>
                            </h4>
                      </center>
                    </div>";
			}
		}
	}
	if(isset($_GET['msg']))
	{
	  echo "<div class='alert alert-success'style='color:darkgreen;width:40%'>";
	  echo $_GET['msg'];
	  echo "</div>";
	}
?>
</html>