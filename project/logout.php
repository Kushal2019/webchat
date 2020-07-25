<?php
include("connect.php");
session_start();
$var=$_SESSION['email'];
$tme=$_REQUEST['time'];
$sql="update login_detais set lasttime='$tme',activelog = 'offline' where username='$var'";
mysqli_query($con,$sql);
session_unset();
header('location: New folder/index.php');
?>