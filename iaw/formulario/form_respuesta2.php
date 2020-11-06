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
  <h1>Ejercicio 2</h1>

<?php

if(isset($_REQUEST['frutas'])){
  $frutas = $_REQUEST["frutas"];
  if($frutas=="cerezas"){
      print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }elseif($frutas == "fresas"){
    print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }
  elseif($frutas == "limon"){
    print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }
  elseif($frutas == "manzana"){
    print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }
  elseif($frutas == "naranja"){
    print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }else{
    print "<p><img src=\"img/frutas/$frutas.svg\"></p>";
  }
}


?>




  <p><a href="form2.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
