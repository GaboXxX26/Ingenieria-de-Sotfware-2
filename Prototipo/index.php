
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<div class="login-box">
  <form action="validar.php"  method="POST">
    <h1 class="animate__animated animate__backInLeft">Sistema</h1>
    <div class="user-box" >
      
      <input type="text" placeholder="ingrese su nombre" name="usuario">
      
      <input type="password" placeholder="ingrese su contraseña" name="contrasena">
      </div>
      <input type="submit" value="Ingresar">
      <a href="registrar.php">Registrarse</a>
    
  </form>
</div> 
</body>
</html>