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

$carta1 =rand(1,10);
$carta2 =rand(1,10);
$carta3 =rand(1,10);
print"<p><img src=\"img/cartas/c$carta1.svg\"><img src=\"img/cartas/c$carta2.svg\"><img src=\"img/cartas/c$carta3.svg\"></p>\n";

if ($carta1>=$carta2) {
    if ($carta1>=$carta3) {
        print"<p><img src=\"img/cartas/c$carta1.svg\"></p>\n";
    }
    else{
      print"<p><img src=\"img/cartas/c$carta3.svg\"></p>\n";
}

  }
  elseif($carta2>=$carta3){
    print"<p><img src=\"img/cartas/c$carta2.svg\"></p>\n";
  }
else{
  print"<p><img src=\"img/cartas/c$carta3.svg\"></p>\n";
}

?>
    </tbody>
  </table>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>