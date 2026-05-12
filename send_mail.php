<?php
// send_mail.php

// Configuración
$to = "contacto@bloodshot.io"; 
$subject_prefix = "[NUEVO LEAD WEB]";

// Evitar acceso directo
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /inicio");
    exit;
}

// 1. Sanitización de datos
$name = strip_tags(trim($_POST["name"] ?? ''));
$email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
$service = strip_tags(trim($_POST["service"] ?? ''));
$message = strip_tags(trim($_POST["message"] ?? ''));

// 2. Validación estricta
if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /inicio?status=error_validation");
    exit;
}

// 3. Construcción del Email
$subject = "$subject_prefix - $service";

$email_content = "Has recibido un nuevo contacto desde la web:\n\n";
$email_content .= "Nombre: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Servicio: $service\n\n";
$email_content .= "Mensaje:\n$message\n";
$email_content .= "\n-------------------------\nEnviado desde el formulario web.";

// Headers
$headers = "From: contacto@bloodshot.io\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// 4. Intento de Envío
// Usamos el operador '@' para suprimir el Warning en Localhost y evitar el error de headers
$sent = @mail($to, $subject, $email_content, $headers);

if ($sent) {
    // Éxito real (En producción/Hostinger)
    header("Location: /inicio?status=success");
} else {
    // Fallo en el envío.
    
    // TRUCO PARA LOCALHOST:
    // Si estamos en localhost (generalmente $_SERVER['SERVER_NAME'] es 'localhost' o '127.0.0.1')
    // simulamos que se envió correctamente para probar el diseño de la alerta de éxito.
    $is_localhost = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');
    
    if ($is_localhost) {
        // Simulamos éxito solo para pruebas de interfaz
        header("Location: /inicio?status=success&mode=dev_simulation"); 
    } else {
        // Si falla en producción, mostramos error real
        header("Location: /inicio?status=error_server"); 
    }
}
exit;
?>