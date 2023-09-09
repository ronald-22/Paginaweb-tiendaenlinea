<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="http://localhost/Paginaweb-tiendaenlinea/css/normalize.css">
  <link rel="stylesheet" href="http://localhost/Paginaweb-tiendaenlinea/css/style.css"> -->
  <title>Pagina Web - Venta de Ropa </title>
<!--  -->
</head>

<body>
  <nav  class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
    
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div  id="my-nav" class="collapse navbar-collapse" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" >
          <a  class="nav-link"  href="index.php">INICIO</a>
        </li>
       
        <li class="nav-item active">
          <a class="nav-link" href="mostrarCarrito.php">CARRITO(<?php 
          echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO'])?>)</a>
        </li>
      </ul>
    </div>
  </nav>
  <br/>
  <br/>

  <div class="container">




