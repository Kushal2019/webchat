<?php
session_start();
include('../connect.php');
$email=$_SESSION['email'];
$pass=$_POST['id'];
//echo $email;
//echo $pass;
//$newpass=$_POST['new'];
$sql="select * from user_detalis where email='$email' and password='$pass'";
if(!mysqli_fetch_array(mysqli_query($con,$sql)))
{
	echo 1;
}
if(isset($_POST['ch']))
	{
	$newpass=$_POST['new'];
	$sql="update user_detalis set password='$newpass' where email='$email'";
	mysqli_query($con,$sql);
	$sql="update login_detais set password='$newpass' where email='$email'";
	mysqli_query($con,$sql);	
	}
?>