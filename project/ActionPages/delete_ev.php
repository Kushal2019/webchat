<?php
include('cleartime.php');
include('../connect.php');
include('backend.php');
$id=$_POST['id'];
$us_email=$_POST['usmail'];
$fri_email=$_POST['frmail'];
$time=$_POST['time'];
//echo $id.$us_email.$fri_email;
$sql="update chat_data set delete_me='$us_email',fri_delete_me='$fri_email',delete_me_val='you deleted this massage',fri_delete_val='you deleted this massage',time='$time' where id='$id'";
mysqli_query($con,$sql);
?>