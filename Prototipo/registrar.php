
<?php
session_start(); // Iniciar sesión (si no está iniciada)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>

<div class="login-box">
    <?php
    // Verificar si hay un mensaje de error en la sesión
    if(isset($_SESSION['error_message'])) {
        echo $_SESSION['error_message']; // Mostrar mensaje de error
        unset($_SESSION['error_message']); // Limpiar mensaje de error de la sesión
    }
    ?>

    <form method="post" action="add.php">
        <h1>Registro de un usuario</h1>
        <div class="user-box" >
      
        <label> Nombre </label>
            <input type="text" placeholder="Ingrese su nombre" name="nombre" >     

        <label>Apellido</label>
            <input type="text" placeholder="Ingrese su apellido" name="apellido" >

        <label>Correo</label> 
            <input type="email" placeholder="Ingrese su correo" name="usuario">

        <label>Contraseña </label>
            <input class="input" type="password" placeholder="Ingrese su contraseña" name="contrasena">
        </div>

        <input type="submit" value="Registrar" name="registro">
        <p>¿Ya tienes una cuenta? ¡Intenta iniciar sesión! <a href="index.php">Inicia Sesión</a></p>
    </form>
</div>
</body>
</html>