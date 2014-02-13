<?php


// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "maria.blanco@mablancomakeup.com.ar";
$email_subject = "Contacto desde el sitio web";


$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";

$result = mail($email_to, $email_subject, $email_message, $headers);

echo '
	<script type="text/javascript">
		alert("Contacto enviado. Muchas gracias!");
		window.location = "contacto.php";
	</script>
';

// header('Location: contacto.php');

?>