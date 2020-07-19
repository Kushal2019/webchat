<?php
//session_start();
include('../connect.php');
$email=$_SESSION['email'];
$sql="select * from user_detalis where email !='$email'";
$user=mysqli_query($con,$sql);
$sql="select * from contacts where username='$email'";
$contact=mysqli_query($con,$sql);

function on_off($email)
{
	global $con; 
	$sql="select * from login_detais where username ='$email'";
	$d=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($d);
	if($data['activelog']=='offline')
	{
		return '0';
	}
	else
	{ 
	return '1';	
	} 
}
function fri_detalis($email)
{
	global $con; 
	$sql="select * from user_detalis where email ='$email'";
	$user=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($user);
	return $data;
}
function fri_id($id)
{
	global $con; 
	$sql="select * from user_detalis where id='$id'";
	$user=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($user);
	return $data;
}


?>