<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Cookies y sesiones en PHP</h1>
    <?php echo("<h3>Trabajando con PHP</h3>"); ?>
    <?php
    
    /*
    $visitante="juan lópez";
    setcookie("user",$visitante,time()+60*60*24*30);
    echo("<p>Hola ".$_COOKIE['user']."</p>");

    
    if($_COOKIE['user']!=null)
    $destino="contenido.php";
    else
    $destino="login.php";
    */
//operador ternario condicional
   // $destino=$_COOKIE['user']!=null?"contenido.php":"login.php";
    $destino=isset($_COOKIE['user'])?"contenido.php":"login.php";


    ?>
    <a href="<?php echo $destino; ?>" alt="enlace a contenido" target="self">Consultar contenido</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>