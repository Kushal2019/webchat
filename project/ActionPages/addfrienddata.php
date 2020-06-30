<?php
include('../connect.php');
session_start();
$mail=$_POST['mail1'];
$usermail=$_SESSION['email'];
$sql="insert into contacts(username,friend_email,status) values('$usermail','$mail','1')";
if($val=mysqli_query($con,$sql))
{
	echo "$val";
	header('location:../user/addfriend.php?');
}
?>