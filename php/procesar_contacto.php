<?php
$servername = "localhost";
$username = "root"; // Asegúrate de que tu usuario de MySQL es root o el que corresponda
$password = ""; // Deja esto vacío si no has configurado una contraseña para root
$dbname = "contactos"; // Asegúrate de que este sea el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario y almacenarlos en variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Preparar el comando SQL
$sql = "INSERT INTO contactos (nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?)";

// Preparar la declaración para ejecutar
$stmt = $conn->prepare($sql);

// Vincular los parámetros a la declaración
$stmt->bind_param("ssss", $nombre, $email, $asunto, $mensaje);

// Ejecutar la declaración
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
