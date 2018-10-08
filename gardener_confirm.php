<?php
    $user=$_COOKIE['user'];
	$con=mysqli_connect("127.0.0.1","root","","nursery");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name=$_POST['em1'];
        $cont=$_POST['em3'];
        $msg=$_POST['em4'];
        $pro=$_FILES['em5']['name'];
        $tmp=$_FILES['em5']['tmp_name'];
        $pro2=$_FILES['em6']['name'];
        $tmp2=$_FILES['em6']['tmp_name'];
        $loc="uploads1/";
            $query="INSERT INTO feed(name,contact,request,user,pic1,pic2) VALUES('$name','$cont','$msg','$user','$pro','$pro2')";
            if(mysqli_query($con,$query))
            {
                if(move_uploaded_file($tmp,$loc . $pro)and move_uploaded_file($tmp2,$loc . $pro2))
                {
                    header("location:gardener.php?msg=Request raised successfully");
                }
                else
                {
                    echo "keklelekne";
                }
            }
    }
    else if(isset($_GET['feedback']))
    {
        $name=$_GET['name1'];
        $cont=$_GET['mail1'];
        $msg=$_GET['msg'];
        $q="INSERT INTO feed(name,contact,review,user) VALUES('$name','$cont','$msg','$user')";
        if(mysqli_query($con,$q))
        {
            header("location:cont.php?msg=Thanks for feedback ");
        }
        else
        {
            echo mysqli_error($con);
        }
    }
?>