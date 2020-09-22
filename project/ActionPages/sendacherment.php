<?php 
session_start(); 	
	include('../connect.php'); 
	include("UserallData.php");
	$email=$_SESSION['email'];
	$data=user_detalis($email);
	//$fri_email=$_POST['id'];
	print_r($_FILES);
	//$img="../upload/user_pic/".$data['user_pic'];
	// if($data['user_pic']!="user_pic")
	// {
	// 	unlink($img);
	// }

	// $filename=$_FILES['file']['name'];
	// $tmp_name=$_FILES['file']['tmp_name'];
	// $location="../upload/user_pic/".$filename;

	//move_uploaded_file($tmp_name,$location);
	//$sql="UPDATE user_detalis SET user_pic='$filename' WHERE email='$email' ";
	// 	$sql="insert into chat_data(from_user,to_fri,msg,time,date,delete_me,fri_delete_me,delete_me_val,fri_delete_val,status,fri_status)values('$email','$fri_email','$filename','$time','$date','0','0','0','0','0','$p')";
	// if(mysqli_query($con,$sql))
	// {
	// 	echo "<img src='../upload/user_pic/".$filename."' alt=''/>";
	// }
	// else
	// {
	// 	//echo $_FILES['file']['tmp_name'].$email;
	// 	echo "tery";
	// }
 ?>