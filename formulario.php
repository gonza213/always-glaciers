<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$excursion = $_POST['excursion'];
$fecha = $_POST['fecha'];
$adultos = $_POST['adultos'];
$ninos = $_POST['ninos'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su teléfono es: " . $telefono . " \r\n";
$mensaje .= "Su DNI o pasaporte es: " . $dni . " \r\n";
$mensaje .= "Día de reserva: " . $fecha . " \r\n";
$mensaje .= "Cantidad de Adultos: " . $adultos . " \r\n";
$mensaje .= "Cantidad de Niños: " . $ninos . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Asunto: Consulta pago transferencia de " . $excursion . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'gonzaa.vidal.18@gmail.com';
$asunto = 'Mensaje del sitio web www.alwaysglaciers.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location: http://localhost/web-turismo/");