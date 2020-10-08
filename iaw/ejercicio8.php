<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
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
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Joseba Vaz Urkiza
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>

<?php

$contrand = rand(1,6);

for ($contador =0; $contador < $contrand ; $contador++)
{
  $rojo = rand(0,255);
  $verde = rand(0,255);
  $azul = rand(0,255);
print "<div><svg height='80' width='80'>
<circle cx='40' cy='40' r='40' stroke-width='30' fill='rgb($rojo,$verde,$azul)'/></svg></div>";
}
?>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
