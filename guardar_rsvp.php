<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodadb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 0;
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    if ($nombre !== '' && $apellido !== '') {
        $stmt = $conn->prepare("INSERT INTO boda_tbl (cantidad, nombre, apellido, mensaje) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $cantidad, $nombre, $apellido, $mensaje);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "incompleto";
    }
}

$conn->close();
?>
