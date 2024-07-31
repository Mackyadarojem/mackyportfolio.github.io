<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "mackymejorada3@gmail.com";
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    if ($email) {
        $mail = new PHPMailer(true);
        
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mackymejorada3@gmail.com'; // Your Gmail address
            $mail->Password = 'cmzp dskb dbzt lgyw'; // Your Gmail App password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
            $mail->Port = 587; // Port 587 for STARTTLS
            
            $mail->SMTPDebug = 2; // Enable verbose debug output
            
            $mail->setFrom($email, $name);
            $mail->addAddress($to); 
            
            $mail->isHTML(true);
            $mail->Subject = 'For Approval';
            $mail->Body = $message;
            
            $mail->send();
            echo '<script>alert("Email sent"); window.location.href = "index.html";</script>';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
