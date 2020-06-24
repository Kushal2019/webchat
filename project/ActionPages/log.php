<?php
include('../connect.php'); 
session_start();
if(isset($_POST['call']))
{
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $sql="select * from login_detais where username='$email' AND password='$pass'";
    
        if(mysqli_fetch_array(mysqli_query($con,$sql)))
        {
            $_SESSION['email']=$email;
            header('location:../user/index.php');
        }
    
    else
    {
        header('location:../login.php?msg=1');
    }
}

?>