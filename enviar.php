<?php
$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$mail = $_POST['mail'];

mail('salvador.ambriz.maya@gmail.com', $nombre, $mail);

?>