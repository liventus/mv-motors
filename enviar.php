<?php
//llamando a los campos
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$distrito = $_POST['distrito'];
$message = $_POST['message'];

//datos del correo 

$destinatario = "mvmotorsperu@gmail.com";
$asunto = "contacto de nuestra web";


$carta = "De : $nombre \n";
$carta .= "con Dni o Ptp : $dni \n";
$carta .= "celular : $celular \n";
$carta .= "email: $email \n";
$carta .= "email: $distrito \n";
$carta .= "mensaje o consulta: $message \n";

//enviando mensaje
mail($destinatario, $asunto, $carta);

header('Location:mensaje_enviado.html')

?>



