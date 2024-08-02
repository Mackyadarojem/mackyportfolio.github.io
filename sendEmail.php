<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/src/Exception.php';
require 'phpMailer/src/PHPMailer.php';
require 'phpMailer/src/SMTP.php';

require '../vendor/autoload.php';

$to = "mackymejorada3@gmail.com";
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars($_POST['message']);
$mail = new PHPMailer(true);    
                         
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mackymejorada3@gmail.com'; // Your Gmail address
    $mail->Password = 'cmzp dskb dbzt lgyw'; // Your Gmail App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
    $mail->Port = 587; // Port 587 for STARTTLS
    $mail->SMTPDebug = 2;

    $mail->setFrom($email, $name);
    $mail->addAddress($to); 

    $mail->isHTML(true);
    $mail->Subject = 'In Portfolio';
    $mail->Body = $message;

    $mail->send();
    echo '<script>alert("Email sent")</script>';
    header("location:index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
