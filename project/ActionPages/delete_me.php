<?php
//session_start();
include('cleartime.php');
include('../connect.php');
include('backend.php');
$id=$_POST['id'];
$mail=$_POST['mail'];
//echo "$id"."$mail";
$sql="select * from chat_data where id='$id'";
$d=mysqli_fetch_array(mysqli_query($con,$sql));
if($email==$mail)
{
	if($d['delete_me_val']!='0')
	{
		$sql="update chat_data set status='1' where id='$id'";
		mysqli_query($con,$sql); 
	}
	else
	{
	$sql="update chat_data set delete_me='$email',delete_me_val='you deleted this massage' where id='$id'";
	mysqli_query($con,$sql);
	}
}
else
{
	if($d['fri_delete_val']!='0')
	{
		$sql="update chat_data set fri_status='1' where id='$id'";
		mysqli_query($con,$sql);
	}
	else
	{
	$sql="update chat_data set fri_delete_me='$email',fri_delete_val='you deleted this massage' where id='$id'";
	mysqli_query($con,$sql);
	}	
}

//if($d['from_user']==)
//include('cleartime.php');
?>