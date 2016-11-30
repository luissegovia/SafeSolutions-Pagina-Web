<?php


$nom       = $_POST['name'];
$tel       = $_POST['phone'];
$email     = $_POST['email'];
$msj       = $_POST['body'];
$mensaje = "<html>";
$mensaje .= "<head><title>Email con HTML</title></head>";
$mensaje .= "<div style='font-family: Arial, Helvetica, sans-serif; font-size:12px; width:600px; color: #000000; background-color:#EEEEEE; border-radius:5px; '>";
$mensaje .= "<img src='http://safesolutions.com.mx/images/Safe(1).png' alt='SafeSolutions'>";
$mensaje .= "<hr>";
$mensaje .= "<body><h1>! SafeSolutions - Nuevo Mensaje !</h1>";
$mensaje .= "Nuevo correo de: ".$nom."<br><br>";
$mensaje .= "Telefono: ".$tel."<br><br>";
$mensaje .= "Email: ".$email."<br><br>";
$mensaje .= "Mensaje: ".$msj."<br><br>";
$mensaje .= "<hr>";
$mensaje .= "Enviado por: http://safesolutions.com.mx/";
$mensaje .= "</div";
$mensaje .= "</body>"; 
$mensaje .= "</html>"; 
$para      = 'luis.segovia244@gmail.com';
$titulo    = '! SafeSolutions - Nuevo Mensaje !';
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: SafeSolutions<yo@correo.com>';

if (mail($para, $titulo, $mensaje, $cabeceras)) {
				echo"<!doctype html>";
				echo"<html>";
				echo"<body>";
				echo"<script>alert('Se ha enviado correctamente el Mensaje');document.location.href='http://safesolutions.com.mx/';</script>";
				echo"</body>";
				echo"</html>";
				
				
}
else {
				echo"<!doctype html>";
				echo"<html>";
				echo"<body>";
				echo"<script>alert('NO se ha enviado correctamente el Mensaje, Intentalo de nuevo');document.location.href='http://safesolutions.com.mx/';</script>";
				echo"</body>";
				echo"</html>";
				
}  









  ?>