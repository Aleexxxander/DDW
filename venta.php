<h3>EJERCICIO VENTA</h3>
<?php 
$cliente = "mishu";
$producto = "comida para gato";
$cantidad = 5;
$precio = 0.80;
$subtotal = $cantidad * $precio;
$iva = $subototal * 0.12;
if ($subtotal > 20) {
    $descuento = $subototal * 0.05;
}

$totalpagar = $subototal + $iva - $descuento;

?>

<label>RESULTADOS</label>
<label>cliente : </label> <?php echo $cliente; ?>
<label>producto : </label> <?php echo $producto; ?>
