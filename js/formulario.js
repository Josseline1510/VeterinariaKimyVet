/*Formulario.js: Incluye los métodos para que se envie el formulario al correo del cliente
Para efectos de evaluación, como el cliente no usa el correo electrónico, se uso como ejemplo el correo josseline1510@gmail.com
Realizado por estudiante: Josseline Gonzalez Beita*/

$(document).ready(function() {
    $("#enviarCorreo").click(function(event) {
        event.preventDefault(); // Evitar el envío predeterminado del formulario

        // Obtención de los datos del formulario
        var formData = $("#contactForm").serialize();

        // Envio de los datos mediante AJAX
        $.ajax({
            type: "POST",
            url: "procesar.php",
            data: formData,
            success: function(response) {
                // Manejo de la respuesta del servidor
                alert(response);
            },
            error: function(error) {
                // Manejar errores si ocurren durante la solicitud AJAX
                console.error("Error en la solicitud AJAX:", error);
            }
        });
    });
});

