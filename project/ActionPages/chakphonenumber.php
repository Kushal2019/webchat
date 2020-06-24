<?php
include('../connect.php');
$phone=$_POST['id'];
$sql="select * from user_detalis where mobile='$phone'";
//$d=mysqli_fetch_array(mysqli_query($con,$sql));
 if(mysqli_fetch_array(mysqli_query($con,$sql)))
 {
 	echo "1";
 }

?>