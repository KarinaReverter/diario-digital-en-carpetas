<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: contacto.html");
    exit;  // Asegúrate de salir después de redirigir
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Si los campos opcionales están vacíos, establecer valores predeterminados
if (empty(trim($nombre))) {
    
   
$nombre = 'anonimo';
}
if (empty(trim($apellido))) {
    $apellido = '';
}

$body = <<<HTML
<h1>Contacto desde la web</h1>
<p>De: $nombre $apellido / $email</p>
<h2>Mensaje</h2>
<p>$mensaje</p>
HTML;

$headers = "MIME-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nombre $apellido <$email>\r\n";
$headers .= "To: contacto@fodiem.com\r\n";
$headers .= "Cc: copia@email.com\r\n";
$headers .= "Bcc: copia@email.com\r\n";

$rta = mail('contacto@fodiem.com', "Mensaje web: $asunto", $body, $headers);

// Verificar la respuesta de la función mail

var_dump
var_dump($rta);
?>n";







