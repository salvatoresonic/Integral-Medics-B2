<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$service = $_POST['servicio'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su teléfono de contacto es: " . $phone . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "El servicio deseado es: " . $service . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";


$para = 'salvador.ambriz.maya@gmail.com';
$asunto = 'Mensaje de solicitud de contacto vía web de Integral Medic';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:home.html");
?>