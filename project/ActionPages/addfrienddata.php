<?php
session_start();
include('../connect.php');
$friend_email=$_POST['id'];
$usermail=$_SESSION['email'];
$sql="select * from contacts where username='$usermail' and friend_email='$friend_email'";
if(!mysqli_fetch_array(mysqli_query($con,$sql)))
{
<<<<<<< HEAD
	echo "$mail";
	header('location:../user/addfriend.php?');
}else
{
	header('location: ../user/chatbox.php');
=======
	$sql="insert into contacts(username,friend_email,status)values('$usermail','$friend_email','1')";
	if(mysqli_query($con,$sql))
	{
		//echo "$mail";
		echo '1';
	}
>>>>>>> b41f37b51315938cb0880efd8bedee0f7e7811ab
}
?>