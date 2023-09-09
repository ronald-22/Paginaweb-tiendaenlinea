<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/formulario.css">
  <title>Formulario Registro</title>
</head>
<body>
  <header>
      <nav class="nav">
        <a href="index.php">INICIO</a>
        <a href="formulario.php">NOSOTROS</a>
        <a href="tabla.php">CLIENTE</a>
        <a href="#">CONTACTO</a>
      </nav>
  </header>
  <?php

  $nombres = $apellidos = $correo = $contraseña = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = test_input($_POST["nombres"]);
    $apellidos = test_input($_POST["apellidos"]);
    $correo = test_input($_POST["correo"]);
    $contraseña = test_input($_POST["contraseña"]);

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <form  class="form-register" method="post" action="encriptar.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="contras eña" id="contraseña" placeholder="Ingrese su Contraseña">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </form>
    <?php
    echo "<h2>Resultado:</h2>";
    echo $nombres;
    echo "<br>";
    echo $apellidos;
    echo "<br>";
    echo $correo;
    echo "<br>";
    echo $contraseña;
    echo "<br>";

    ?>

  </footer class="footer">
  <p>
        Todos los derechos reservados 2023.
    </p>
  </footer>



</body>
</html>