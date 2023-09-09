<?php
include 'Conexiones/config.php';
include 'Conexiones/conexion.php';
include 'carrito.php';
include 'template/cabecera.php';
?>

<?php
if ($_POST) {
    $total = 0;
    $SID = session_id();
    $Correo = $_POST['email'];
    foreach ($_SESSION['CARRITO'] as $indice => $producto) { //Para lle el carrito de compras

        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sentencia = $pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo,:Total, 'pendiente');");


    $sentencia->bindParam(":ClaveTransaccion", $SID);
    $sentencia->bindParam(":Correo", $Correo);
    $sentencia->bindParam(":Total", $total);
    $sentencia->execute();
    $idVenta = $pdo->lastInsertId();

    
    foreach ($_SESSION['CARRITO'] as $indice => $producto) {

     $sentencia = $pdo->prepare("INSERT INTO `tbldatalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`) VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD); ");

    $sentencia->bindParam(":IDVENTA", $idVenta);
    $sentencia->bindParam(":IDPRODUCTO", $producto['ID']);
    $sentencia->bindParam(":PRECIOUNITARIO", $producto['PRECIO']);
    $sentencia->bindParam(":CANTIDAD", $producto['CANTIDAD']);
    $sentencia->execute();
    }
    //echo "<h3>" . $total . "</h3>";
}

?>
<br>
<br>


<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar tu compra, la cantidad de:
        <h4>$<?php echo number_format($total,2); ?></h4>
    </p>
   
    <p>Gracias por tu compra!! <br>
        <strong>(Para reclamos comunícate a esté correo: outfitshop@hotmail.com)</strong>
    </p>
</div>


<?php include 'template/pie.php'; ?>
