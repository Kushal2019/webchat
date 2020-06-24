<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../mail/vendor/autoload.php';
//include('connect.php');
  //  print_r($value);
// Instantiation and passing `true` enables exceptions
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
    //Server settings
    $str=md5(microtime());;
	$str=substr($str,0,6);
	//echo $str; -------------------- verification code----------------
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'SMTP.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bcaprogramup@gmail.com';                     // SMTP username
    $mail->Password   = 'surojit007';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('bcaprogramup@gmail.com', 'Surojit');
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