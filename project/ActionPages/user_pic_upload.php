<?php 
	include('../connect.php');
	include("UserallData.php");
	$email=$_SESSION['email'];
	$data=user_detalis($email);
	$filename=$data['id'].".jpg";
	$tmp_name=$_FILES['file']['tmp_name'];
	$location="../upload/user_pic/".$filename;
	move_uploaded_file($tmp_name,$location);
	$sql="UPDATE user_detalis SET user_pic='$filename' WHERE email='$email' ";

	if(mysqli_query($con,$sql))
	{
		echo "<img src='../upload/user_pic/".$filename."' alt=''/>";
	}
	else
	{
		//echo $_FILES['file']['tmp_name'].$email;
		echo "tery";
	}
 ?>