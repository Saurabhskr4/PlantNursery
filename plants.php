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
	 <div style="width:100%;height:100%">
         <center><h2 style="margin-top:1%;">Plants</h2></center>
         <?php
            include 'underline.php';
		 ?>
		 <center>
		 <div style="width:100%;height:10%;background-color:lightcyan;width:60% "class="alert">
		 <div class="row">
		   <form action="plants.php">
					<div class="col-lg-4">
                        <select name="sort"style="color:black"class="form-control">
							<option value="0">Sort by</option>
							<option >Price : low to high</option>
							<option >Price : high to low</option>
							<option >Availability</option>
						</select>
					</div>
				<div class="col-sm-2"><input type ="submit"class="btn btn-warning"name="filtersort"></div>
			</form>
		  </div> 
	 	</div>
		 </center>
		 <?php
	  		$con=mysqli_connect("127.0.0.1","root","","nursery");       
		 	if(isset($_GET['filtersort']))
			{
				$g2=$_GET['sort'];
				echo "<center><h4>Sort by : ".$g2."</h4></center>";
				$high="Price : high to low";
				$low="Price : low to high";
				$avbl="Availability";
				$plrt="Popularity";

				//**************---------**************** SORT BY PRICE LOW TO HIGH **********---------------****************//

				if($g2==$low)
				{
					$sql="SELECT * FROM plants ORDER BY price ASC";
					include'display.php';
				}

				//**************---------**************** SORT BY PRICE HIGH TO LOW **********---------------****************//

				else if($g2==$high)
				{
					$sql="SELECT * FROM plants ORDER BY price DESC";
					include'display.php';
				}

				//**************---------**************** SORT BY AVAILABILITY **********---------------****************//

				else if($g2==$avbl)
				{
					$sql="SELECT * FROM plants ORDER BY stock DESC";
					include'display.php';
				}

				//**************---------**************** SORT BY POPULARITY **********---------------****************//

				else if($g2==0)
				{
					$sql="SELECT * FROM plants";
		 			include'display.php';
				}
			}
		 	else
			{
				$sql="SELECT * FROM plants";
		 		include'display.php';
			}

         ?>
	  </div>
    </div>
    </div>
    <?php
          include 'foot.php';
    ?>
    </body>
</html>