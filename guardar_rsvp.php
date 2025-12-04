<?php
// ===== NAMESPACES =====
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ===== ARCHIVOS PHPMailer =====
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// ===== CONEXIÓN BD =====
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodadb";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// ===== PROCESAR FORMULARIO =====
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $asistencia = isset($_POST['attendance']) ? $_POST['attendance'] : '';
    $cantidad   = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 0;
    $nombre     = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido   = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $mensaje    = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    if ($nombre !== '' && $apellido !== '') {

        // ===== GUARDAR EN BD =====
        $stmt = $conn->prepare("INSERT INTO boda_tbl (asistencia, cantidad, nombre, apellido, mensaje) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $asistencia, $cantidad, $nombre, $apellido, $mensaje);

        if ($stmt->execute()) {

            // ===== ENVIAR EMAIL =====
            $mail = new PHPMailer(true);

            try {
                // CONFIGURACIÓN SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'jordan22granados@gmail.com';       
                $mail->Password   = 'qwun qekg xrki mcoh';         
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                // REMITENTE Y DESTINO
                $mail->setFrom('jordan22granados@gmail.com', 'Confirmación de Boda');
                $mail->addAddress('jordan22granados@gmail.com');

                // CONTENIDO DEL MENSAJE
                $mail->isHTML(true);
                $mail->Subject = "Nueva confirmación RSVP";
                $mail->Body = "
                    <h3>Se ha recibido una nueva confirmación:</h3>
                    <p><strong>Asistencia:</strong> {$asistencia}</p>
                    <p><strong>Cantidad:</strong> {$cantidad}</p>
                    <p><strong>Nombre:</strong> {$nombre} {$apellido}</p>
                    <p><strong>Mensaje:</strong> {$mensaje}</p>
                ";

                $mail->send();

            } catch (Exception $e) {
                // Puedes activar esto si quieres ver errores:
                // echo "Mailer Error: {$mail->ErrorInfo}";
            }

            echo "success"; // Respuesta al JS
        } else {
            echo "error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "incompleto";
    }
}

$conn->close();
?>
