<?php

// dentro de las variables $ y de los corchetes va lo que en el
// formulario haya puesto en "name"
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

 // como llegará el email:
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time())

$para = 'aacar.ph@gmail.com'
$asunto = 'Este mail fue enviado desde la web'

// funcion mail, a quien le llega el mail
mail($para, $asunto, utf8_decode($mensaje), $header);

// redirección al haber enviado el form
header('Location:exito.html');

?>