<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
//
////Load Composer's autoloader
//require 'vendor/autoload.php';

$firstName = $_POST['firstName'];
$email = $_POST['email'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = 'inbound.notifications@facilitapay.com';
    $mail->Password = 'Xaz62399';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPSecure = "tls";
//    $mail->SMTPDebug = 3;

    //Recipients
    $mail->setFrom('inbound.notifications@facilitapay.com', $name);
    $mail->addAddress('pedro.almeida@facilitapay.com', 'Pedro Almeida');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Novo contato através do site';
    $mail->Body = '<h1>Um novo contato foi feito através do site</h1>';
    $mail->Body .= '<strong>Nome:</strong> '.$firstName."<br>";
    $mail->Body .= '<strong>Email:</strong> '.$email."<br>";
    $mail->Body .= '<strong>Mensagem:</strong><br> '.$message;

    $mail->AltBody    = '';

    $mail->send();

    header("Location: thanks.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
