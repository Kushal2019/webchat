<?php
include('../connect.php');
$id=$_POST['id'];
$sql="select * from user_detalis,login_detais where login_detais.username=(select email user_detalis where user_detalis.id='$id')";
$d=mysqli_fetch_array(mysqli_query($con,$sql));
if($d['activelog']=='online')
{
	echo "1";
}
else
{
	echo $d['lasttime']; 
	 
}

?>

