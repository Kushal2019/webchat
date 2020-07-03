<?php
include("connect.php");
session_start();
$var=$_SESSION['email'];
$tme=$_GET['time'];
$sql="update login_detais set lasttime='$tme', activelog = 'offline' where username='$var'";
mysqli_query($con,$sql);
session_destroy();
header('Location: New folder/index.php');
?>