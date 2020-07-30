<?php
include("connect.php");
session_start();
$var=$_SESSION['email'];
$tme=$_REQUEST['time'];
//echo $tme;
//$date=date_create($_REQUEST['time']);
//print_r($date);
//$tim=date_format($date,"d/m/Y h:i:s A");
//echo $tim;
$sql="update login_detais set lasttime='$tme',activelog = 'offline' where username='$var'";
mysqli_query($con,$sql);
session_unset();
header('location: New folder/index.php');
?>