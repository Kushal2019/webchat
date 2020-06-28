 <?php 
include('../connect.php');
	require '../ActionPages/UserallData.php';
	$email=$_SESSION['email'];
	$data=user_detalis($email);

 ?>
<img src="../upload/user_pic/<?=$data['user_pic']?>" alt=""/>                       