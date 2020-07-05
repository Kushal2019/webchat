<?php
session_start();
include('../connect.php');
$username=$_SESSION['email'];
$friend_email=$_POST['id'];
$sql="select status from login_detais where username='$friend_email'";
$exe=mysqli_query($con,$sql);
$ary=mysqli_fetch_array($exe);
$status=$ary['status'];
$sql="select name from user_detalis where email='$friend_email'";
$exe=mysqli_query($con,$sql);
$ary=mysqli_fetch_array($exe);
$name=$ary['name'];
$sql="select * from chat_with where user='$username' and friend='$friend_email'";
if(!mysqli_fetch_array(mysqli_query($con,$sql)))
{
	$sql="insert into chat_with(user,friend,friend_name,status)values('$username','$friend_email','$name','$status')";
	$exe=mysqli_query($con,$sql);
}
?>