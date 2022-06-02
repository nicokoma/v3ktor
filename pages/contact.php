<?php 
$myemail = 'info@v3ktor.com.ar';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

$mail_status = mail($to, $email_subject, $email_body, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'gracias.html';
	</script>
<?php
} else { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'error.html';
	</script>
<?php
}

?>
