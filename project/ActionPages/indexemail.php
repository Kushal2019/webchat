<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../mail/vendor/autoload.php';
//include('connect.php');
  //  print_r($value);
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name=$_POST['inputFirstName'];
$email=$_POST['inputEmailAddress'];
$subject=$_POST['Subject'];
$massage=$_POST['Message'];
try {
    //Server settings
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
    $mail->addAddress('bcaprogramup@gmail.com');     // Add a recipient
  
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = " $subject web chat";
    $mail->Body    = " hello <br> my name $name<br> $massage<br> <font color='red'>mail id</font> $email";
  

    if($mail->send())
    {
  //  echo 'Message has been sent';
   // header('location:login.php')
     header('location:../new folder/index.php?msg=1');
    }
} catch (Exception $e) 
{
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     header('location:../new folder/index.php?msg=2');
}
?>