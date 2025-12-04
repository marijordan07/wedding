<?php
// ===== NAMESPACES =====
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ===== ARCHIVOS DE PHPMailer =====
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// ===== CONFIGURACIÓN SMTP =====
// CAMBIA ESTOS DATOS POR TU CORREO
$host = "smtp.gmail.com";  
$username = "jordan22granados@gmail.com";  
$password = "qwun qekg xrki mcoh"; 
$port = 587; // TLS

// ===== PROBAR ENVÍO =====
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $username;
    $mail->Password   = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = $port;

    // REMITENTE
    $mail->setFrom($username, 'TEST SMTP');

    // DESTINO (tu correo)
    $mail->addAddress($username);

    // CONTENIDO
    $mail->isHTML(true);
    $mail->Subject = 'Prueba de SMTP - PHPMailer';
    $mail->Body    = '<h3>El servidor SMTP funciona correctamente 🎉</h3>';

    $mail->send();
    echo "✅ Correo enviado correctamente. El SMTP funciona.";

} catch (Exception $e) {
    echo "❌ Error enviando correo:<br>";
    echo $mail->ErrorInfo;
}
