<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT * FROM login WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:index.php");

}else{
  ?>
  <?php
  include("login.php");
  ?>

  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
