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
  <h1>Ejercicio 4</h1>

<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];

if($nombre == ""){
  print "<p>NO HAS INTRODUCIDO UN NOMBRE</p>";
}
elseif (ctype_alpha ($_REQUEST['nombre'])){
  print "<p>El nombre es:$nombre</p>";
}else{
  print "<p>No has introducido un nombre valido</p>";
}

if($apellido == ""){
  print "<p>NO HAS INTRODUCIDO UN APELLIDO</p>";
}
elseif (ctype_alpha ($_REQUEST['apellido'])){
  print "<p>El apellido es: $apellido</p>";
}else{
  print "<p>No has introducido un apellido valido</p>";
}

?>




  <p><a href="form4.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
