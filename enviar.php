<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hola34luis@gmail.com'; // Tu correo de Gmail
    $mail->Password = 'xhzg vizh aqev rzfo'; // Tu contraseña de Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remitente y destinatario
    $mail->setFrom($correo, $nombre); 
    $mail->addAddress('hola34luis@gmail.com', 'alexander');

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'hola web';
    $mail->Body    = "Nombre: $nombre <br> Correo: $correo <br> Mensaje: $mensaje"; // El cuerpo del mensaje

    // Enviar el mensaje
    if ($mail->send()) {
        echo 'Mensaje enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el mensaje.';
    }
} catch (Exception $e) {
    echo "Hubo un error: {$mail->ErrorInfo}";
}
}
?>

