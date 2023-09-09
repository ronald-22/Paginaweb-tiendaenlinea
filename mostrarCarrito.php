<?php
include 'Conexiones/config.php';
include 'carrito.php';
include 'template/cabecera.php';
?>

<br>
<h3>Lista del Carrito</h3>
<div class="col-sm-4">

<a class="btn btn-default" href="consulta.php">Factura </a>
</div>
<?php if (!empty($_SESSION['CARRITO'])) {   ?>

    <a href="reportes.php">Reportes PDF</a>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="40%">Descripción</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%">---</th>
            </tr>

            <!-- Agregar al carrito -->
            <?php $total = 0; ?>
            <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                <tr>
                    <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
                    <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                    <td width="20%" class="text-center">$<?php echo $producto['PRECIO'] ?></td>
                    <td width="20%" class="text-center">$<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></td>
                    <td width="5%">


                        <form action="" method="post">


                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                            
                            <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                        </form>

                    </td>
                </tr>
                <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
            <?php } ?>

            <tr>
                <!-- Calcular el total -->
                <td colspan="3" align="right">
                    <h3>Total</h3>
                </td>
                <td align="right">
                    <h3>$<?php echo number_format($total, 2); ?></h3>
                </td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">

                
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">
                            <div class="form-group">
                                <label for="my-input">Nombres:</label>
                                <input id="nombres" class="form-control" type="text" name="nombres" placeholder="Ingrese sus Nombres" required>
                                <label for="my-input">Apellidos:</label>
                                <input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Ingrese sus Apellidos" required>
                                <label for="my-input">Teléfono:</label>
                                <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Ingrese su teléfono" required>
                                <label for="my-input">Correo:</label>
                                <input id="email" class="form-control" type="email" name="email" placeholder="Ingrese su correo" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">
                                Los productos se enviarán a este correo.
                            </small>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">
                            Proceder a pagar >>
                        </button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
<?php } else { ?>
    <div class="alert alert-success">
        No hay productos en el carrito...
    </div>
<?php } ?>

<?php include 'template/pie.php'; ?>