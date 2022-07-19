<?php
include("header.php")
?>

<h2>Login de usuarios</h2>

<?php
$correo="";
$password="";
if(isset($_POST["email"]) && isset($_POST["clave"])){
$correo=$_POST["email"];
$password=$_POST["clave"];
}
if($password=="123456")
setcookie("user",$correo,time()+60*60*24*30);

?>
<form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="clave">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="index.php" class="btn btn-danger">Regresar a inicio</a>
<?php
include("footer.php")
?>