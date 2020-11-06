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
  <h1>Fruta favorita</h1>

  <form action="form_respuesta2.php" method="post">
    
<p>
    <p>Fruta favorita:</p>
    <p><input type="radio" name="frutas" value="cerezas"><label for="frutas">Cerezas</label></p>
    <p><input type="radio" name="frutas" value="fresa"><label for="frutas">Fresas</label></p>
    <p><input type="radio" name="frutas" value="limon"><label for="frutas">Limon</label></p>
    <p><input type="radio" name="frutas" value="manzana"><label for="frutas">Manzanas</label></p>
    <p><input type="radio" name="frutas" value="naranja"><label for="frutas">Naranjas</label></p>
    <p><input type="radio" name="frutas" value="pera"><label for="frutas">Peras</label></p>
</p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>

<?php
 

    $frutas =["cerezas", "fresa", "limon", "manzana", "naranja", "pera"];

    for ($contador =0; $contador < 6 ; $contador++)
{
 
print "<p><input type='radio' name='frutas' value='$frutas[$contador]'><label for='frutas'>$frutas[$contador]</label></p>";
}

?>

  </form>




  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>
