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
 <div class="alert" style="margin-top:60px"><a href="home.php"style="color:skyblue">Home /</a>tools</div>
 <div style="height:100%; width:100%">
     <h2><center>Gardening Tools</center></h2>
   <?php
     include'underline.php';
		$con=mysqli_connect("127.0.0.1","root","","nursery");
		$loc="pictures/tools/";

//-----------------------------------------------         ALL THE TOOLS        -----------------------------------------------------------

        $sql="SELECT * FROM tool";
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
                            <div style='width:100%;height:100px;'>
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
                }
            }
        }
     ?>

  </div>
  </div>
<?php
	include 'foot.php';
?> 
</body>
</html>