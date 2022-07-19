<?php
include("header.php");
session_start();
?>

<h2>Pasarela de pago</h2>
<h3>Datos de la compra</h3>
<p>Lugar de envío : <?php echo $_SESSION['direccion'] ?></p>
<p>Producto elegido : <?php echo $_SESSION['producto'] ?></p>

<?php
//conexion a mysql a la tabla producto
$conn = new mysqli("localhost", "root", "", "test");
$consulta = "SELECT * FROM productos where id=".$_SESSION['producto'];
$result = $conn->query($consulta);
while($row = $result->fetch_assoc()) {

   echo  "<div class='card' style='width: 18rem;'>";
    echo "<img src='".$row['foto']."' class='card-img-top'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$row['nombre']."</h5>";
      
   echo '</div></div>';

}

?>



<h3>Datos de tarjeta de crédito</h3>

<?php
include("footer.php");
?>