<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'test@gmail.com';      
    $mail->Password   = 'piie fyby kalh ukja';    // ← 16-digit App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('test@gmail.com', 'Pycleantech Contact');
    $mail->addAddress('test@gmail.com');  

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = '<h3>Hello!</h3><p>Yeh PHP se aayi hai!</p>';

    $mail->send();
    echo "✅ Mail send ho gayi!";

} catch (Exception $e) {
    echo "❌ Error: {$mail->ErrorInfo}";
}
?>