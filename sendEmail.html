<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

spl_autoload_register(function ($class) {
    $prefix = 'PHPMailer\\';
    $base_dir = __DIR__ . '/PHPMailer/src/';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

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
    $mail->Subject = 'For Approval';
    $mail->Body = $message;

    $mail->send();
    echo '<alert>"Email sent"</alert>';
    header("location:index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
