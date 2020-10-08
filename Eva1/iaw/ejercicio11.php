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
  $numero = rand(1,6);

  if($numero%2==0)
  {
    print "<p>el numero $numero es par </p>";
  }else{
    print "<p>el numero $numero es impar </p>";
  }
}
?>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
