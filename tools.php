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
<title>Online plnat nursery</title>
<style>
a{
 color:white;
}
a:hover{
color:red;
text-decoration:none;
}
</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px;">
 <div style="height:100%; width:100%">
     <h2><center>Gardening Tools</center></h2>
   <?php
     include'underline.php';
	 ?>
	 <center>
		 <div style="width:50%;height:10%;background-color:lightcyan"class="alert">
		 <div class="row">
		   <form action="tools.php">
					<div class="col-lg-6">
                        <select name="sort"style="color:black"class="form-control">
							<option value="0">Sort by</option>
							<option >Price : low to high</option>
							<option >Price : high to low</option>
							<option >Availability</option>
						</select>
					</div>
				<div class="col-lg-2"><input type ="submit"class="btn btn-warning"name="filtersort"></div>
			</form>
		  </div> 
	 </div>
	 </center>
	 
	 <?php
		$con=mysqli_connect("127.0.0.1","root","","nursery");
		

//-----------------------------------------------         ALL THE TOOLS        -----------------------------------------------------------
	 	if(isset($_GET['filtersort']))
		{
			$g2=$_GET['sort'];
			echo "<center><h4>Sort by : ".$g2."</h4></center>";
			$high="Price : high to low";
			$low="Price : low to high";
			$avbl="Availability";

			//**************---------**************** SORT BY PRICE LOW TO HIGH **********---------------****************//

			if($g2==$low)
			{
				$sql="SELECT * FROM tool ORDER BY price ASC";
				include'disp_file.php';
			}

			//**************---------**************** SORT BY PRICE HIGH TO LOW **********---------------****************//

			else if($g2==$high)
			{
				$sql="SELECT * FROM tool ORDER BY price DESC";
				include'disp_file.php';
			}

			//**************---------**************** SORT BY AVAILABILITY **********---------------****************//

			else if($g2==$avbl)
			{
				$sql="SELECT * FROM tool ORDER BY stock DESC";
				include'disp_file.php';
			}

			 else if($g2==0)
			{
				$sql="SELECT * FROM tool ";
				include'disp_file.php';
			}
		}
        else
		{
			$sql="SELECT * FROM tool ";
        	include'disp_file.php';
		}
     ?>

  </div>
  </div>
<?php
	include 'foot.php';
?> 
</body>
</html>