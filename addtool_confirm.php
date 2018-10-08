<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cname=$_COOKIE['cmp'];
    $mail=$_COOKIE['user'];
    $pr=$_POST['price'];
    $name=$_POST['name'];
    $stk=$_POST['numb'];
    $des=$_POST['des'];
    $img1=$_FILES['p1']['name'];
    $tmp1=$_FILES['p1']['tmp_name'];
    $img2=$_FILES['p2']['name'];
    $tmp2=$_FILES['p2']['tmp_name'];
    $con=mysqli_connect("127.0.0.1","root","","nursery");
    $loc="pictures/tools/";
    $q="INSERT INTO tool(name,price,stock,description,pic1,pic2,mail,cname)VALUES('$name',$pr,$stk,'$des','$img1','$img2','$mail','$cname')";
	echo $q;
    if(mysqli_query($con,$q))
    {
       if(move_uploaded_file($tmp1,$loc.$img1) and move_uploaded_file($tmp2,$loc.$img2))
       {
           header("location:addtool.php?msg=POSTED SUCCESSFULLY");
       }
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>