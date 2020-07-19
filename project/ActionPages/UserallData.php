<?php
	include("../connect.php");
	//session_start();
	function user_detalis($email)
	{
		global $con;
		$sql="select * from user_detalis where email='$email'";
		$d=mysqli_query($con,$sql);
		$data=mysqli_fetch_array($d);
		return $data;
	}
?>