<?php
include("header.php");
session_start();
?>

<h2>Pasarela de pago</h2>
<h3>Datos de la compra</h3>
<p>Lugar de envío : <?php echo $_SESSION['direccion'] ?></p>
<p>Producto elegido : <?php echo $_SESSION['producto'] ?></p>
<h3>Datos de tarjeta de crédito</h3>

<?php
include("footer.php");
?>