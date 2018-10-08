<?php 
	$con=mysqli_connect("127.0.0.1","root","","nursery");
	if(isset($_GET['update']))
	{
		$n=$_GET['update'];
		$one="SELECT * FROM plants WHERE id='$n'";
		if($res=mysqli_query($con,$one))
		{
			if($gti=mysqli_fetch_assoc($res))
			{
				$nm=$gti['name'];
				$vr=$gti['var'];
				$pr=$gti['price'];
				$stk=$gti['stock'];
				$age=$gti['age'];
				$des=$gti['description'];
			}
		}

	}	
?>
<!doctype html>
<html lang="en-us">
<head>
<title>add new plant</title>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<link rel="stylesheet" type="text/css"href="class.css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
 <div class="conatiner-fluid">
    <div class="jumbotron"style="background-color:white">
        <caption><h2 style="margin:10px 20px"><u>Update Plant details</u></h2></caption>
        <div class="injumbo2" style="margin-left:20px">
           <form action="update_plant_confirm.php" method="post" enctype="multipart/form-data">
                <table >
                    <tbody>
                    <tr>
                        <td><h4>Plant name<span style="color:red">*</span></h4></td>
                        <td><h4>Variety<span style="color:red">*</span></h4></td>

                    </tr>
                    <tr>
                        <td ><input type="text"name="name"class="form-control"placeholder="plant name" value="<?php echo $nm;?>"required /></td>
                        <td><input type="text"name="var"class="form-control"placeholder="plant type" value="<?php echo $vr;?>"required /></td>
                    </tr>
                    <tr>
                        <td ><h4>Price<span style="color:red">*<sup>per unit</sup></span></h4></td>
						<td><h4>Stock<span style="color:red">*</span></h4></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="price" rows="6"class="form-control"placeholder="Plant price" value="<?php echo $pr;?>" required /></td>
						 <td><input type="number"class="form-control" name="numb" value="<?php echo $stk;?>" required /></td>
                    </tr>

                    <tr>
                        <td><h4>Age<span style="color:red">* <sup>in days</sup></span></h4></td>
						<td><h4>Id<span style="color:red">* <sup>predefined</sup></span></h4></td>
                    </tr>
                    <tr>
                        <td><input type="number"class="form-control" name="date" value="<?php echo $age;?>" required /></td><td><input type="text"class="form-control" name="id" value="<?php echo $n;?>" readonly /></td>
                       
                    </tr>
                    <tr>
                    <td ><h4>Description<span style="color:red">*</span></h4></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="des"rows="6"class="form-control"placeholder="Plant desription"required ><?php echo $des;?> </textarea></td>
                    </tr>
                    <tr>
                        <td><h4><input type ="submit"class="form-control btn btn-info"value="Update" name="submit"/></h4></td>
                        <td><h4><input type ="Reset"class="form-control btn btn-danger"value="Cancel"/></h4></td>
                    </tr>
                </tbody>
                </table>
            </form>
         <?php
         if(isset($_GET['msg']))
          {
              echo "<div class='alert alert-success'style='color:darkgreen;width:40%'>";
              echo $_GET['msg'];
              echo "</div>";
          }
         ?>
        </div>	
    </div>
  </div>
 </body>
</html>