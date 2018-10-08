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
        <caption><h2 style="margin:10px 20px"><u>Post new plant</u></h2></caption>
        <div class="injumbo2" style="margin-left:20px">
           <form action="addplant_confirm.php" method="post" enctype="multipart/form-data">
                <table >
                    <tbody>
                    <tr>
                        <td><h4>Category<span style="color:red">*</span></h4></td>
                        <td ><h4>Price<span style="color:red">*<sup>per unit</sup></span></h4></td>
                    </tr>
                    <tr>
                        <td>
                        <select name="type" class="form-control" required>
                                    <option >--select--</option>
                                    <option >fruit</option>
                                    <option >flower</option>
                        </select>
                        </td>
                        <td><input type="text" name="price" rows="6"class="form-control"placeholder="Plant price"required /></td>
                    </tr>
                    <tr>
                        <td><h4>Plant name<span style="color:red">*</span></h4></td>
                        <td><h4>Variety<span style="color:red">*</span></h4></td>

                    </tr>
                    <tr>
                        <td ><input type="text"name="name"class="form-control"placeholder="plant name"required /></td>
                        <td><input type="text"name="var"class="form-control"placeholder="plant type"required /></td>
                    </tr>

                    <tr>
                        <td><h4>Age<span style="color:red">* <sup>in days</sup></span></h4></td>
                        <td><h4>Stock<span style="color:red">*</span></h4></td>
                    </tr>
                    <tr>
                        <td><input type="number"class="form-control" name="date"required /></td>
                        <td><input type="number"class="form-control" name="numb"required /></td>
                    </tr>
                    <tr>
                    <td ><h4>Description<span style="color:red">*</span></h4></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="des"rows="6"class="form-control"placeholder="Plant desription"required ></textarea></td>
                    </tr>
                    <tr>
                        <td><h4>Upload pictures<span style="color:red">*</span></h4></td>
                    </tr>
                    <tr>
                        <td><input type="file"class="form-control btn btn-info" name="p1"/></td>
                        <td><input type ="file"class="form-control btn btn-info" name="p2"/></td>
                    </tr>
                    <tr>
                        <td><h4><input type ="submit"class="form-control btn btn-info"value="Post" name="submit"/></h4></td>
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