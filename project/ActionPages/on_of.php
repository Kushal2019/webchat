<?php
session_start();
include('../connect.php');
$email=$_SESSION['email'];
$sql="select * from user_detalis where email!='$email'";
$user=mysqli_query($con,$sql);
function on_off($email)
{
	global $con; 
	$sql="select * from login_detais where username ='$email'";
	$d=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($d);
	if($data['activelog']=='offline')
	{
		return $data['lasttime']
	}
	else
	{
	return $data['activelog'];	
	} 
}

?>