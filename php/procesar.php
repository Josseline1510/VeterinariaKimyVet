<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombreMascota = $_POST["nombreMascota"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $genero = $_POST["genero"];
    $tipoAnimal = $_POST["tipoAnimal"];
    $razaMascota = $_POST["razaMascota"];
    $nombrePropietario = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura la dirección de correo a la que se enviará el mensaje
    $destinatario = "josseline1510@gmail.com";

    // Asunto del correo
    $asunto = "Solicito de información para mascota:"+$nombreMascota;

    // Cuerpo del correo
    $cuerpo = "Detalles del Registro:\n\n";
    $cuerpo .= "Nombre de la Mascota: $nombreMascota\n";
    $cuerpo .= "Fecha de Nacimiento: $fechaNacimiento\n";
    $cuerpo .= "Género de la Mascota: $genero\n";
    $cuerpo .= "Tipo de Animal: $tipoAnimal\n";
    $cuerpo .= "Raza de la Mascota: $razaMascota\n";
    $cuerpo .= "Nombre del Propietario: $nombrePropietario\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje: $mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpo, $cabeceras);

    // Redirecciona a una página de confirmación
    header("Location: confirmacion.html");
} else {
    // Si se intenta acceder directamente al script, redirecciona al formulario
    header("Location: formulario.html");
}
?>
