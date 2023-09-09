<?php
ob_start();
?>
<?php
include 'Conexiones/config.php';
include 'Conexiones/conexion.php';
include 'carrito.php';
?>
<h1>Reporte</h1>
<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripción</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="25%" class="text-center">Total</th>
        </tr>

        <!-- Agregar al carrito -->
        <?php $total = 0; ?>
        <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
            <tr>
                <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
                <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                <td width="20%" class="text-center">$<?php echo $producto['PRECIO'] ?></td>
                <td width="25%" class="text-center">$<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></td>
               
                    <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                    
                    </form>
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
            
        </tr>
    </tbody>
</table>

<?php
$html=ob_get_clean();
//echo $html;
require_once 'libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options =$dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo_.pdf", array("Attachment" => false));

?>


<?php include 'template/pie.php'; ?>








