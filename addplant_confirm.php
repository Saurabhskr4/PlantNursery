<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $cname=$_COOKIE['cmp'];
    $mail=$_COOKIE['user'];
    $type=$_POST['type'];
    $pr=$_POST['price'];
    $name=$_POST['name'];
    $vrt=$_POST['var'];
    $age=$_POST['date'];
    $stk=$_POST['numb'];
    $des=$_POST['des'];
    $img1=$_FILES['p1']['name'];
    $tmp1=$_FILES['p1']['tmp_name'];
    $img2=$_FILES['p2']['name'];
    $tmp2=$_FILES['p2']['tmp_name'];
    $con=mysqli_connect("127.0.0.1","root","","nursery");
	$q1="SELECT * FROM seller WHERE email='$mail'";
	if($res=mysqli_query($con,$q1))
	{
		if(mysqli_num_rows($res)>0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
			$city=$row['city'];
		
			}
		}
	}
    $loc="pictures/";
    $q="INSERT INTO plants(name,var,age,price,description,stock,mail,type,pic1,pic2,cname,city)VALUES('$name','$vrt',$age,$pr,'$des',$stk,'$mail','$type','$img1','$img2','$cname','$city')";
    if(mysqli_query($con,$q))
    {
       if(move_uploaded_file($tmp1, $loc.$img1) and move_uploaded_file($tmp2, $loc.$img2))
       {
           header("location:addplant.php?msg=POSTED SUCCESSFULLY");
       }
		else
		{
        echo mysqli_error($con);			
		}
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>