<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Datos de conexión a la base de datos
    $servername = "tu_servidor_mysql";
    $username = "root";
    $password = "bida";
    $dbname = "empresas_unach";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, apellidos, email, contraseña) VALUES ('$nombre', '$apellidos', '$email', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        // Obtener el ID del usuario recién insertado
        $id_usuario = $conn->insert_id;
        echo "Registro completado con éxito. ¡Bienvenido, $nombre!";
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    // Si alguien intenta acceder directamente a este script, redirige al formulario de registro
    header("Location: formulario_registro.html");
    exit();
}
?>