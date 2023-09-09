<?php
include 'Conexiones/config.php';
include 'Conexiones/conexion.php';
include 'carrito.php';
include 'template/cabecera.php';
?>

<br>
<?php if ($mensaje != "") { ?>
  <div class="alert alert-success">
    Mensaje...
    <?php echo ($mensaje); ?>
    <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>
  </div>
<?php } ?>

<header>
  <h1 class="text-center">Out <span>Fit Shop</span></h1>
  <br>
</header>

<div class="container text-center">
  <img src="img/portada.jpg" class="img-fluid" width="100%" alt="portada">
</div>

<div class="row">
  <?php
  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
  $sentencia->execute();
  $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  //print_r($listaProductos);
  ?>
  <div>
    <br>
    <h2 class="text-center">Nuestros Productos</h2>
    <br>
    <br>
  </div>

  <?php foreach ($listaProductos as $producto) { ?>
    <div class="col-3">
      <div class="card">
        <img title="<?php echo $producto['Nombre']; ?>" class="card-img-top" src="<?php echo $producto['Imagen']; ?>" alt="<?php echo $producto['Nombre']; ?>" height="317px">

        <div class="card-body">
          <span><?php echo $producto['Nombre']; ?></span>
          <h5 class="card-title">$<?php echo $producto['Precio']; ?></h5>
          <p class="card-text">Descripción</p>

          <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Comprar</button>
          </form>

        </div>
      </div>
    </div>
  <?php } ?>

</div>
<?php include 'template/pie.php'; ?>

