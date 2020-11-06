<?php
/**
 * Controles en formularios
 *
 * @author Joseba Vaz Urkiza
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Joseba Vaz Urkiza
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>

<?php


$tamaño = $_REQUEST['tamaño'];



if (isset($_REQUEST['forma'])) {
    $forma=$_REQUEST['forma'];
    if ($forma=="circulo") {
        print "<div><svg height='500' width='500'>
<circle cx='250' cy='250' r='$tamaño' stroke-width='30' fill='red'/></svg></div>";
    } elseif ($forma=="cuadrado") {
        print"<svg width='500' height='500'>
 <rect x='50' y='20' rx='20' ry='20' width='150' height='150' fill='red'/></svg>";
    }
}else{
  print "<p>No has elegido forma</p>";
}


?>




  <p><a href="form6.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
