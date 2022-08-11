<?php
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];

$header = 'De: ' . $mail . "\r\n";
$header = 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Mensaje de: " . $name . " \r\n";
$mensaje = "Su correo: " . $mail . " r\n";
$mensaje = "Contacto: " . $phone . " \r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . " \r\n";

$para = '20yerik66@gmail.com';
$aunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: index.html");
?>