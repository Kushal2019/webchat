<?php
session_start();
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user_detalis where email='$email'";
$d=mysqli_query($con,$sql);
$data=mysqli_fetch_array($d);
?>