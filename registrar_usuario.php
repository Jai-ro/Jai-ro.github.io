<?php
// Conexión a la base de datos (debes configurar esto)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT); // Se recomienda almacenar contraseñas seguras con hash

    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $contrasena);

    if ($stmt->execute()) {
        // Registro exitoso, redireccionar o mostrar un mensaje de éxito
        header("Location: registro_exitoso.php");
        exit();
    } else {
        // Error en la inserción
        echo "Error al registrar el usuario: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
