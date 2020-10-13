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

$dado1 =rand(1,6);
$dado2 =rand(1,6);
$total =$dado1+$dado2;
print"<p><img src=\"img/dados/$dado1.svg\">+<img src=\"img/dados/$dado2.svg\">=$total</p>\n";

?>
    </tbody>
  </table>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
