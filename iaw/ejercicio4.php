<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Joseba Vaz Urkiza
 *  Escriba aquí su nombre
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
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php

$rojo =rand(0,255);
$verde =rand(0,255);
$azul =rand(0,255);
print "<svg height='100' width='100'><circle cx='50' cy='50' r='50px' stroke-width='50' fill='rgb($rojo,$verde,$azul)'/></svg>";

?>
    </tbody>
  </table>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
