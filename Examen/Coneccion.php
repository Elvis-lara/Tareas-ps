<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    $destinatario = $correo; // Usar el correo ingresado por el usuario
    $asunto = "Envío de correo de prueba con PHP";
    $cuerpo = '
        <html> 
            <head> 
                <title>Prueba de envío de correo</title> 
            </head>

            <body> 
                <h1>Solicitud de contacto desde correo de prueba!</h1>
                <p> 
                    Contacto: ' . $nombre . ' - ' . $asunto . ' <br>
                    Mensaje: ' . $mensaje . ' 
                </p> 
            </body>
        </html>
    ';

    // Para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Dirección del remitente
    $headers .= "FROM: $nombre <$correo>\r\n";

    mail($destinatario, $asunto, $cuerpo, $headers);

    echo "Correo enviado";
}
?>
<a href="index.php">Volver a inicio</a>