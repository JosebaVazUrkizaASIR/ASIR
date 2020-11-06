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
<table>
<?php

$jugadores = $_REQUEST['jugadores'];
$trio=array();
$total=array();
$trio=array();

for ($contador =1; $contador <=$jugadores; $contador++) {
  print "<p>Jugador $contador=</p>";
  $cartas=array();
  for($contador2 =0; $contador2 <3; $contador2++){
    $cartas[$contador2]=rand(1,10);
    print "<img src='img/cartas/c$cartas[$contador2].svg'>";
  }
  if ($cartas[0]==$cartas[1] && $cartas[1]==$cartas[2]){
    $trio[$contador]="si";
  }else{
    $trio[$contador]="no";
  }
  $total[$contador]=$cartas[0]+$cartas[1]+$cartas[2];
}

for($contador3=1; $contador3 <=$jugadores; $contador3++) {
  print "<p>La puntuacion del jugador $contador3 es= $total[$contador3]</p>";
  
  print "<p>El jugador $contador3 trio= $trio[$contador3]</p>";
}


?>
</table>
  <p><a href="form10.php">Volver al formulario.</a></p>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
