<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">


</head>

<body>

  <img src="img/58.jpg" alt="imagen">
  <div class="login">
    <h1>Inicio de Sesion</h1>
    <form action="validar.php" method="post">
      <div class="username">
        <input type="text" required name="usuario">
        <label>Nombre de usuario</label>
      </div>

      <div class="username">
        <input type="password" required name="contraseña">
        <label>Contraseña</label>
      </div>

      <div class="recordar">¿Olvidastes tu contraseña?</div>
      <input type="submit" value="Iniciar">
      <div class="registrarse">
        Quiero hacer el <a href="#">registro</a>
      </div>
    </form>
  </div>
</body>

</html>