<?php
session_start();
unset($_SESSION['suser']);
session_destroy();
$user=$_COOKIE['user'];
$city=$_COOKIE['city'];
setcookie('user',$user,time()-9);
setcookie('time',$city,time()-9);
header("location:home.php");
?>