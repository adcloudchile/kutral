<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Correo Electronico</title>
</head>

<body>
<?php
	
$mail="adc.cloudchile@gmail.com";

$gracias="http://sfcloud.hol.es/D&Gtelecom/Thanks.html";
	
$nombre=$_POST['template-contactform-name'];
$telefono=$_POST['template-contactform-phone'];
$email=$_POST['template-contactform-email'];
$servicio=$_POST['template-contactform-service'];
$asunto=$_POST['template-contactform-subject'];
$mensaje=$_POST['template-contactform-message'];
	
	$message = "
	
	Estimados:

	Aquí estan los detalles del Posible cliente que se generó desde su página web el dia de hoy.
	
	Nombre: ".$nombre."
	Teléfono: ".$telefono."
	Email: ".$email."
	Servicio: ".$servicio."
	Asunto: ".$asunto."
	Mensaje: ".$mensaje."


	Saludos.
	
	";
	
	if(mail($mail, "Nuevo Posible Cliente",$mensaje))
	header("location: $gracias");
	echo('Mensaje enviado exitosamente');
	
?>

<!--Correo de respuesta al posible cliente -->

<?php

$mailcli=$_POST['template-contactform-email'];

$mensajecli="

Estimado/a:    Hemos recibido sus datos exitosamente, nos pondremos en contacto con ud. lo antes posible.   

Recuerde que nuestros horarios de atención son de Lunes a Viernes de 09:00 am. a 06:00 pm. 


Saludos Codiales,
KUTRAL Protección S.P.A.

";

if(mail($mailcli, "Confirmación de Mensaje",$mensajecli))
header("location: $gracias");
?>





</body>
</html>