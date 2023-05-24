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
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];
$bio = $_POST['bio'];

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
//    $mail->addAddress('gabriel@quatroventos.com.br', 'Pedro Almeida');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Novo cadastro para vaga através do site';
    $mail->Body = '<h1>Um novo cadastro foi feito no site</h1>';
    $mail->Body .= '<strong>Nome:</strong> '.$firstName." ".$lastName."<br>";
    $mail->Body .= '<strong>Email:</strong> '.$email."<br>";
    $mail->Body .= '<strong>Telefone:</strong> '.$phone;
    $mail->Body .= '<strong>Bio:</strong><br> '.$bio;

    if (isset($_FILES['resume']) &&
        $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $mail->AddAttachment($_FILES['resume']['tmp_name'],
            $_FILES['resume']['name']);
    }

    $mail->AltBody    = '';

    $mail->send();

    header("Location: thanks.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
