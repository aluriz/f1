<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$idioma = $_POST['idioma'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Idioma de contacto: " . $idioma . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'onlymaburro123@gmail.com';
$asunto = 'De la página web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>

