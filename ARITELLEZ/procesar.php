procesar
<?php

$servername = "localhost";
$username = "root";
$password = "Ari2407teca";
$dbname = "galletas y pasteles";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$nombre = $_POST['nombre2'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO formulario_contacto (nombre, email, mensaje)
VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
