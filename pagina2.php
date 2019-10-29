<?php
//recojemos los datos
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//utilizamos la función mail para enviar el formulario
if (mail('razzziel001@gmail.com',$nombre, $asunto, $mensaje)) {
  echo "mail enviado";
}else{
  echo "No enviado";
}
 ?>
