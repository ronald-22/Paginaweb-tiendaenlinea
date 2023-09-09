<?php

$conexion= new mysqli("localhost","root","","tiendaenlinea");

if ($conexion->connect_errno){
  echo "No hay conexion: (". $conexion->connect_errno . ")" . $conexion->connect_error;
  
}
?>