<?php
include("connect.php");
session_start();
$var=$_SESSION['email'];
<<<<<<< HEAD
$tme=$_REQUEST['time'];
$sql="update login_detais set lasttime='$tme',activelog = 'offline' where username='$var'";
mysqli_query($con,$sql);
session_destroy();
header('Location: New folder/index.php');
=======
$time=$_COOKIES['time'];
echo $time;
$sql="update login_detais set lasttime='',activelog = 'offline' where username='$var'";
mysqli_query($con,$sql);
session_destroy();
//header('location:New folder/index.php');
>>>>>>> b41f37b51315938cb0880efd8bedee0f7e7811ab
?>