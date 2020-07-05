<?php
session_start();
include('../connect.php');
$email=$_SESSION['email'];
$fri_email=$_POST['fri_email'];
$msg=$_POST['msg'];
$sql="insert into chat_data(from_user,to_fri,msg,time)values('$email','$fri_email','$msg','00')";
if(mysqli_query($con,$sql))
{
    echo "yes";
}
else
{
    echo "no";
}
?>
