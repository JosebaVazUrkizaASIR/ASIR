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

$trio1 = false;
$trio2 = false;

$pareja1 = false;
$valorpareja1 = 0;
$pareja2 = false;
$valorpareja2 = 0;

$jugador11 = rand(1,6);
$jugador12 = rand(1,6);
$jugador13 = rand(1,6);
$jugador21 = rand(1,6);
$jugador22 = rand(1,6);
$jugador23 = rand(1,6);

$suma1 = $jugador11+$jugador12+$jugador13;
$suma2 = $jugador21+$jugador22+$jugador23;

print "<div style='background-color:green'>";
print "<img src=\"img/dados/$jugador11.svg\">";
print "<img src=\"img/dados/$jugador12.svg\">";
print "<img src=\"img/dados/$jugador13.svg\">";
print "</div>";

print "<div style='background-color:yellow'>";
print "<img src=\"img/dados/$jugador21.svg\">";
print "<img src=\"img/dados/$jugador22.svg\">";
print "<img src=\"img/dados/$jugador23.svg\">";
print "</div>";


/* TRIOS O PAREJAS */

if ($jugador11==$jugador12 & $jugador12==$jugador13){
  $trio1= true;
}
  elseif ($jugador11==$jugador12){
    $pareja1 = true;
    $valorpareja1 = $jugador11;
  }
    elseif ($jugador11==$jugador13){
      $pareja1 = true;
      $valorpareja1 = $jugador11;
    }
      elseif ($jugador12==$jugador13){
        $pareja1 = true;
        $valorpareja1 = $jugador12;
      }

if ($jugador21==$jugador22 & $jugador22==$jugador23){
  $trio2= true;
}
  elseif ($jugador21==$jugador22){
    $pareja2 = true;
    $valorpareja2 = $jugador21;
  }
    elseif ($jugador21==$jugador23){
      $pareja2 = true;
      $valorpareja2 = $jugador21;
    }
      elseif ($jugador22==$jugador23){
        $pareja2 = true;
        $valorpareja2 = $jugador22;
      }



/* COMPARACIONES */      
if ($trio1== true && $trio2==true) {
    if ($jugador11>$jugador21) {
        print "<p>Gana el jugador 1</p>";
    } elseif ($jugador11<$jugador21) {
        print "<p>Gana el jugador 2</p>";
    } else {
        print "<p>Empate</p>";
    }
}
    else{
        if ($trio1 == true && $trio2 == false) {
            print "<p>Gana jugador 1</p>";
        } elseif ($trio2 == true && $trio1 == false) {
            print "<p>Gana jugador 2 por trio</p>";
        } else {
            if ($pareja1 == true && $pareja2== true) {
                if ($valorpareja1>$valorpareja2) {
                    print "<p>Gana el jugador 1</p>";
                } elseif ($valorpareja1<$valorpareja2) {
                    print "<p>Gana el jugador 2</p>";
                } else {
                    if ($suma1>$suma2) {
                        print "<p>Gana el jugador 1</p>";
                    } else {
                        print "<p>Gana el jugador 2</p>";
                    }
                }
            } elseif ($pareja1 == true && $pareja2 == false) {
                print "<p>Gana el jugador 1</p>";
            } elseif ($pareja1 == true && $pareja2 == false) {
                print "<p>Gana el jugador 2</p>";
            }
        }
        
    }
?>

  <footer>
    <p>Joseba Vaz Urkiza</p>
  </footer>
</body>
</html>