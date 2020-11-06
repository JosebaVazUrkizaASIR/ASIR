<?php

include_once 'conexion.php';

/*SELECT DESDE LA BD*/

$sql_select = "SELECT * FROM colores";

print_r($_POST);
if($_POST){
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];

    if ($color != "" and $descripcion !=""){
        $sql_insert = "INSERT INTO colores (color, descripcion)
        VALUES (?,?)";

        $sentencia_sql = $gbd->prepare($sql_insert);
        $sentencia_sql->execute(array($color, $descripcion));

        header("location:index.php");
    }
}

/*SELECT cuando recibimos una ID*/
if($_GET){
    $id=$_GET['id'];
    $sql_lectura_id="SELECT * FROM colores WHERE id=?"; //Sentencia SQL que queremos ejecutar

    $sentencia_select_id= $gbd->prepare($sql_lectura_id);
    $sentencia_select_id->execute(array($id));
    $resultado_id = $sentencia_select_id->fetch();
    //fetch porque viene solo un resultado
}

$sentencia_sql = $gbd->prepare($sql_select);
$sentencia_sql ->execute();

$resultado = $sentencia_sql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores</title>
</head>
<body>
<table>
<?php

foreach($resultado as $color){
    print "<tr style=\"background-color:$color[color]\">
    <td>$color[color]</td>
    <td>$color[descripcion]</td>
    <td>$color[id]</td>
    <td><a href=\"index.php?id=$color[id]\">&#128221</a></td>
    <td><a href=\"eliminar.php?id=$color[id]\">&#128465</a></td>
    </tr>";
}

?>
</table>

<?php
//METER
if(!$_GET):
?>

<h2>AGREGAR COLOR</h2>

<form action="index.php" method="POST">

<p><label for="color">Color</label>
    <input type="text" name="color">
</p>

<p><label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion">
<p>
<button>Añadir</button>

</p>

</form>

<?php 
endif
?>

<?php
if($_GET)://EDITAR
?>

<h2>EDITAR COLOR </h2>

<form action="edit.php" method="GET">

<p><label for="color">Color</label>
    <input type="text" name="color" value="<?php print $resultado_id['color']?>"></p>

<p><label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="<?php print $resultado_id["descripcion"]?>"></p>

<input type="hidden" name="id" value="<?php print $resultado_id['id']?>">

<p><button>Editar</button>

</p>

</form>

<?php 
endif
?>

</body>
</html>