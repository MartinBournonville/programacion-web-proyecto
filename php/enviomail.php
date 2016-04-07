
<?php

//Instalar servidor smtp para hacer funcionar este codigo
if (!isset($_POST['email'])) {

 }else{
  $mensaje="Mensaje del formulario de contacto";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "email_lubricentro@email.com"; //reemplazar por email correspondiente
  $remitente = $_POST['email'];
  $asunto = "Consulta web de: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");

}

