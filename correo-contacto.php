<?php
    $destino= "alphadesarrollowebok@gmail.com";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $mensaje = $_POST["messaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "\nDesea Info sobre tus servicios ";
    mail($destino, "Nueva consulta desde Sitio Web", $contenido);
    header("Location:index.html");
?>