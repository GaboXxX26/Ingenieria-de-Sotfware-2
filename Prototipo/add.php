<?php
session_start(); // Iniciar sesión (si no está iniciada)

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['usuario']) || empty($_POST['contrasena'])) {
        $_SESSION['error_message'] = "Oe llena todos los campos"; // Guardar mensaje de error en la sesión
        header("Location: registrar.php"); // Redirigir de nuevo a la página de registro
        exit(); // Detener la ejecución de este script
    } else {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $sql = $conexion->query("INSERT INTO nombre (nombre, apellido, usuario, contrasena) VALUES ('$nombre', '$apellido', '$usuario', '$contrasena')");
        if ($sql == 1) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrarse";
        }
    }
}
?>