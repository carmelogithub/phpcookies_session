<?php
include("header.php")
?>

<?php
session_start();
$_SESSION['direccion']=$_POST["direccion"];
$_SESSION['producto']=$_POST["producto"];

echo("la sesión de direccion es ".$_SESSION['direccion']);

?>



<h2>Contenido privado</h2>

<form method="post" action="http://localhost/sitiophpsession/contenido.php">
  <div class="mb-3">
    <label for="direccion" class="form-label">Dirección de envío</label>
    <input type="text" class="form-control" id="direccion" name="direccion">
  </div>
 
  <select name="producto" class="form-select" aria-label="Default select example">
  <option selected>selecciona el producto a comprar</option>
  <option value="1">Camisa</option>
  <option value="2">Chaqueta</option>
  <option value="3">Pantalón</option>
</select>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Añadir al carrito</button>
</form>

<a href="http://localhost/sitiophpsession/pago.php" class="btn btn-danger">Pagar</a>

<?php
include("footer.php")
?>