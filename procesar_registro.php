<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $comentarios = $_POST['comentarios'];

    // Aquí puedes agregar el código para almacenar estos datos en una base de datos o enviar un correo de confirmación

    echo "<h1>¡Registro exitoso!</h1>";
    echo "<p>Gracias, $nombre. Te has registrado al curso: $curso.</p>";
    echo "<p>Nos pondremos en contacto contigo a través de $email.</p>";
    echo "<a href='cursos.html'>Volver a los cursos</a>";
} else {
    echo "<p>Error en el envío del formulario.</p>";
}
?>
