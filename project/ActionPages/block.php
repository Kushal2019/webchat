<?php
	session_start();
	include('../connect.php');
	include('backend.php');
	$fri_id=$_POST['fri'];
	$id=$_POST['id'];
	$fri=fri_id($fri_id);
	$fri_email=$fri['email'];
	if($id=='1')
	{
		$sql="update chat_with set status='0' where user='$email' and friend='$fri_email'";
		mysqli_query($con,$sql);
		echo "1";
	}
	else if($id=='2')
	{
		$sql="update chat_with set status='1' where user='$email' and friend='$fri_email'";
		mysqli_query($con,$sql);
		echo "2";
	}

?>