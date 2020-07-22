
<?php
	session_start();
	include('backend.php');
	$id=$_POST['id'];
	$fri_de=fri_id($id);
	$fri_email=$fri_de['email'];
	$msg=$_POST['msg'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	//echo $time;
	$sql="insert into chat_data(from_user,to_fri,msg,time,date,delete_me,fri_delete_me,delete_me_val,status,fri_status)values('$email','$fri_email','$msg','$time','$date','0','0','0','0','0')";
	mysqli_query($con,$sql);
	$sql="select * from chat_with where user='$email' and friend='$fri_email'";
	if(mysqli_fetch_array(mysqli_query($con,$sql)))
	{
		$sql="update chat_with set time='$time' where user in('$email','$fri_email') and friend in('$fri_email','$email')";
		mysqli_query($con,$sql);
	}
	else
	{
		$sql="insert into chat_with(user,friend,time,status)values('$email','$fri_email','$time','1')";
		mysqli_query($con,$sql);
		$sql="insert into chat_with(friend,user,time,status)values('$email','$fri_email','$time','1')";
		mysqli_query($con,$sql);
	}

?>