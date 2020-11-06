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

$email = $_REQUEST['email'];
$email2 = $_REQUEST['email2'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print"<p>El email es valido</p>";
}else{
  print "<p>Has introducido un email invalido";
}

if ($email==$email2){
  print "<p>Los emails son iguales</p>";
}else{
  print "<p>Mete los dos emails iguales</p>";
}

if (isset($_REQUEST['aceptar'])){
  print "<p>Has aceptado que te enviemos los emails</p>";
}else{
  print "<p>No has aceptado que te enviemos los emails</p>";
}


?>




  <p><a href="form5.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
