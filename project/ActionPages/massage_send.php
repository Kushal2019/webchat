
<?php
	session_start();
	include('backend.php');
	$id=$_POST['id'];
	$fri_de=fri_id($id);
	$fri_email=$fri_de['email'];
	$msg=$_POST['msg'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	echo $time;
	$sql="insert into chat_data(from_user,to_fri,msg,time,date)values('$email','$fri_email','$msg','$time','$date')";
	mysqli_query($con,$sql);

?>