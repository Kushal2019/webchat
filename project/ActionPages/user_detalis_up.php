<?php
session_start();
include('../connect.php');
if(isset($_POST['up']))
{
$name=$_POST['name'];
$email=$_SESSION['email'];
$mobile=$_POST['phone'];
$profession=$_POST['pro'];
$sql="update user_detalis set name='$name',mobile='$mobile',profession='$profession' where email='$email'";
	if(mysqli_query($con,$sql))
	{
		header('location:../user/index.php?msg=2');
	}
	else
	{
		header('location:../user/index.php?msg=1');
	}

}
?>