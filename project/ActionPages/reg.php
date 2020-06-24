<?php
include('../connect.php');

  $frist=$_POST['frist'];
  $last=$_POST['last'];
  $name=$frist." ".$last;
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pass=md5($_POST['pas']); 
  $prof=$_POST['prof'];
  $sql="insert into user_detalis(name,mobile,email,password,profession,user_pic)values('$name','$phone','$email','$pass','$prof','upload/user_pic/userprofile.jpg')";
  if(mysqli_query($con,$sql))
  {
    $sql1="insert into login_detais(username,password,type,status,activelog,fristtime,lasttime)values('$email','$pass','USER','1','offline','00.00','00.00')";
    if(mysqli_query($con,$sql1))
    {
      header('location:../login.php');
    }
    else
    {
       header('location:../register.php?msg=1');
    } 
  }
  else
  {
    header('location:../register.php?msg=1');
  }
?>