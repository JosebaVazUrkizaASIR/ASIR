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

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];
$peso = $_REQUEST['peso'];


if (empty($nombre)) {
 
  print "<p>No has introducido nombre</p>";
  
}else{
  print "<p>Tu nombre es $nombre</p>";
    }


if (empty($apellido)) {

  print "<p>No has introducido apellido</p>";
  
}else{
  print "<p>Tu apellido es $apellido</p>";
    }

if (empty($edad)) {

  print "<p>No has introducido tu edad</p>";
  
}else{
  print "<p>Tu edad es $edad</p>";
    }

if (empty($peso)) {

  print "<p>No has introducido tu peso</p>";
  
}else{
  print "<p>Tu peso es $peso KG</p>";
    }

if (isset($_REQUEST['sexo'])) {
    $sexo = $_REQUEST['sexo'];
    if ($sexo == "hombre") {
        print "<p>Eres un hombre</p>";
    } elseif ($sexo == "mujer") {
        print "<p>Eres una mujer</p>";
    }
}
else {
  print "<p>No has elegido sexo</p>";
}

if (isset($_REQUEST['estado'])) {
    $estado = $_REQUEST['estado'];
    if ($estado == "soltero") {
        print "<p>Estas soltero</p>";
    } elseif ($estado == "casado") {
        print "<p>Estas casado</p>";
    } elseif ($estado == "otro") {
        print "<p>Tienes otro tipo de relacion</p>";
    } 
}else {
  print "<p>No has elegido relacion</p>";
}

if (isset($_REQUEST['aceptar'])){
  print "<p>Has aceptado</p>";
}
else{
  print "<p>No has aceptado</p>";
}


//Aficiones
if (isset($_REQUEST['cine'])){
  print "<p>Te gusta el cine</p>";
}
else{
  print "<p>No te gusta el cine</p>";
}

if (isset($_REQUEST['deporte'])){
  print "<p>Te gusta el deporte</p>";
}
else{
  print "<p>No te gusta el deporte</p>";
}

if (isset($_REQUEST['literatura'])){
  print "<p>Te gusta la literatura</p>";
}
else{
  print "<p>No te gusta la literatura</p>";
}

if (isset($_REQUEST['musica'])){
  print "<p>Te gusta la musica</p>";
}
else{
  print "<p>No te gusta la musica</p>";
}

if (isset($_REQUEST['tebeos'])){
  print "<p>Te gustan los tebeos</p>";
}
else{
  print "<p>No te gustan los tebeos</p>";
}

if (isset($_REQUEST['television'])){
  print "<p>Te gusta la television</p>";
}
else{
  print "<p>No te gusta la television</p>";
}

?>




  <p><a href="form7.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
