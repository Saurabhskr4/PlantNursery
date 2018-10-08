<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $id=$_POST['id'];
    $pr=$_POST['price'];
    $name=$_POST['name'];
    $vrt=$_POST['var'];
    $age=$_POST['date'];
    $stk=$_POST['numb'];
    $des=$_POST['des'];
    $con=mysqli_connect("127.0.0.1","root","","nursery");
    $loc="pictures/";
    $q="UPDATE plants SET name='$name',var='$vrt',age=$age,price=$pr,description='$des',stock=$stk WHERE id=$id";
    if(mysqli_query($con,$q))
    {
       
           header("location:posted_plants.php?msg=UPDATED SUCCESSFULLY");
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>