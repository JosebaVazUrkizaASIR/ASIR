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

$contrand = rand(1,10);

for ($contador =0; $contador < $contrand ; $contador++)
{
  $dado= rand(1,6);
print "<p><img src=\"img/dados/$dado.svg\"></p>";
}

?>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
