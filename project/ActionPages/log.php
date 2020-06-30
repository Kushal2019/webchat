<?php
include('../connect.php'); 
session_start();
if(isset($_POST['call']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from login_detais where username='$email' AND password='$pass'";
    if(mysqli_fetch_array(mysqli_query($con,$sql)))
        {
            $_SESSION['email']=$email;
            $sql1="UPDATE login_detais SET activelog = 'online' WHERE username ='$email'";
            mysqli_query($con,$sql1);
            if(isset($_POST['rempas']))
            {
                setcookie("username", $email, time() + (86400 * 30), "/");
                 setcookie("password", $pass, time() + (86400 * 30), "/");
            }
            else
            {
                setcookie("username","", time() -3600, "/");
                setcookie("password","", time() -3600, "/");
            }

            header('location:../user/index.php');
        }
    
    else
    {
        header('location:../login.php?msg=1');
    }
}

?>