<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>enviar</title>
<style type="text/css">
<!--
-->
</style></head>

<body bgcolor="#000000"; style="color:#FFF; font-size:16px">
<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$web = $_POST['web'];
$texto = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "Reply-To: " . $mail . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su web es: " . $web . " \r\n";
$mensaje .= "Su mensaje es: " . $texto . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y H:i:s") . " \r\n";

$para = 'usuario@gmail.com';
$asunto = 'Contacto Web';

mail($para, $asunto, utf8_decode($mensaje), $header);
if ($resultado === false) {
	
    echo '     iError!';            // mensaje de error
} else {
	
   header('location: form_ok.html'); 
}
?>
</body>
</html>
