<?php
session_start();
include('../connect.php');
$friend_email=$_POST['id'];
$usermail=$_SESSION['email'];
$sql="select * from contacts where username='$usermail' and friend_email='$friend_email'";
if(!mysqli_fetch_array(mysqli_query($con,$sql)))
{
	echo "$mail";
	header('location:../user/addfriend.php?');
}else
{
	header('location: ../user/chatbox.php');
}
?>