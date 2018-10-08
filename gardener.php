<?php
    include'master.php';
?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf8"/>
<meta name="width" content="width=device-width initial scale=1"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\css\font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="classes.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="hover-min.css"/>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<title>Gardener</title>
<style>
a{
 color:white;
}
a:hover{
color:red;
text-decoration:none;
}
h4{
color:black;
}
</style>
</head>
<body>
<div class="container-fluid"style="margin:0px;padding:0px">
	       <center><h2 >Ask for gardener service </h2>
               <?php include'underline.php';?>
		          <div class="well"style='background:none;border:none'>
                    <form action="gardener_confirm.php" method="post"enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text"name="em1" style="width:200px"class="form-control"placeholder="Enter your name"required />
                                </td>
                            </tr>
                            <tr>
                                <td>Zip</td>
                                <td>
                                    <input type="number" name="em2" style="width:200px"class="form-control"placeholder="Enter your zip "required />
                                </td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>
                                    <input type="number"name="em3" style="width:200px"class="form-control"placeholder="Enter contact" required />
                                </td>   
                            <tr>
                                <td colspan="2">Message</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea rows="6"name="em4"style="width:400px"placeholder="Enter your problem" class="form-control"required ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <input type="file"name="em5" style="width:200px"class="form-control" />
                                </td>
                                <td>
                                    <input type="file"name="em6" style="width:200px"class="form-control" />
                                </td>
                            </tr>

                           <tr>
                                <td>
                                    <input type="submit" class="btn btn-info"value="Send Request" name="request"style="margin-top:20px;width:70%"/>
                                </td>
                               <td>
                                   <input type="reset" class="btn btn-danger"value="Clear"style="margin-top:20px;width:70%"/>
                               </td>
                           </tr>
                        </table>
                    </form>
                </div>
         <?php
         if(isset($_GET['msg']))
          {
              echo "<div class='alert alert-success'style='color:darkgreen;width:40%'>";
              echo $_GET['msg'];
              echo "</div>";
          }
         ?>
	   </center>
    </div>
	               <?php include'foot.php';?>
</body>
</html>