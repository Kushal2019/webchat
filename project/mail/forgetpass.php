<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
include('../connect.php');
if (isset($_POST['send']))
 {
  $email=$_POST['add'];
  $sql="select email,password from user_detalis where email='$email'";
  $d=mysqli_query($con,$sql);
  if($d)
  {
    $data=mysqli_fetch_array($d);
    if ($data['email']==$email) {
        try {
              $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
              $mail->isSMTP();                                            // Send using SMTP
              $mail->Host       = 'SMTP.gmail.com';                    // Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'webchatphp@gmail.com';                     // SMTP username
              $mail->Password   = 'webchat123';                               // SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; 
              $mail->Port       = 587;                                    // TCP port to connect to, use 465 for 
              $mail->setFrom('webchatphp@gmail.com', 'WebChat Group');
              $mail->addAddress($email);     // Add a recipient
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = " Password Recovary ";
              $mail->Body    = " hello <br> your password is:".$data['password'];
            

              if($mail->send())
              {
               header('location:../login.php?msg=2');
              }
            } catch (Exception $e) 
              {
                header('location:../new folder/index.php?msg=3');
              }
      }
      else
      {
        echo "email is wrong";
      }
    }
  }
?>