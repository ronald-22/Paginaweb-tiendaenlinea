<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$encriptado=sha1($nombres);
$apellidosencriptado=sha1($apellidos);
$correoencriptado=sha1($correo);
$contraseñaencriptado=sha1($contraseña);

echo "nombre encriptado $encriptado";
echo "<br>";
echo "apellido encriptado $apellidosencriptado";
echo "<br>";
echo "correo encriptado  $correoencriptado";
echo "<br>";
echo "contraseña encriptado  $contraseñaencriptado";
echo "<br>";

?>
</body>
</html>