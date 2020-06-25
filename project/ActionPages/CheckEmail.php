<?php
session_start();
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../mail/vendor/autoload.php';
$mail = new PHPMailer(true);
$email=$_POST['id'];
include('../connect.php');
$sql="select * from user_detalis where email='$email'";
$d=mysqli_fetch_array(mysqli_query($con,$sql));
 if(mysqli_fetch_array(mysqli_query($con,$sql)))
 {
 	echo "1";
 }
 else
 {

try {
    $str=md5(microtime());;
	$str=substr($str,0,6);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'SMTP.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webchatphp@gmail.com';                     // SMTP username
    $mail->Password   = 'webchat123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; 
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for 
    $mail->setFrom('webchatphp@gmail.com', 'Surojit');
    $mail->addAddress($email);     // Add a recipient
  
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = " wellcome web chat";
    $mail->Body    = " hello <br> your verification code= <font color='red'>$str</font>";
  

    if($mail->send())
    {
  //  echo 'Message has been sent';
   // header('location:login.php')
        
    	ob_clean();
    	
    	$_COOKIE['veri']=$str;
        $_SESSION['veri']=$str;
    	echo $str;
}
} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	ob_clean();
    echo '2';
}
 }
?>