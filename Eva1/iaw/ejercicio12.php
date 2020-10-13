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

$animales =["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon", "leopardo", "medusa", "mono", "oso", "oso-blanco", "pajaro", "pinguino", "rinoceronte", "serpiente", "tigre", "tortuga", "tortuga-marina"];
$numero =rand(0,19);

print "<p><img src=\"img/animales/$animales[$numero].svg\"></p>";

?>
    </tbody>
  </table>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
