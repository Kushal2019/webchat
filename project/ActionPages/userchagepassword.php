<?php
session_start();
include('../connect.php');
$email=$_SESSION['email'];
$pass=$_POST['old'];
$newpass=$_POST['new'];
if(isset($_POST['ch']))
{
		$sql="select  * from user_detalis where password='$pass' and email='$email'";
		if(mysqli_fetch_array(mysqli_query($con,$sql)))
		{
			$sql="update user_detalis set password='$newpass' where email='$email'";
			mysqli_query($con,$sql);
			$sql="update login_detais set password='$newpass' where username='$email'";
			if(mysqli_query($con,$sql))
			{
				header('location:../user/index.php');
			}
		}
		else
		{
			header('location:../user/index.php?msg=1');
		}

}	

	?>