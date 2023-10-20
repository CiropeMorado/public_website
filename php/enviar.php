
<?php
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $asunto = "Formulario Rellenado";
    $mensaje = "Nombre: " . $nombre . "<br> Email: " . $email . "<br> Mensaje: " . $_POST["message"];
    if(mail("info@ciropemorado.com", $asunto, $mensaje)){
        echo "Correo enviado";
    }
 ?>