<?php
$id = $_GET["id"];
$color = $_GET["color"];
$descripcion = $_GET["descripcion"];

include_once 'conexion.php';

$sql_update = "UPDATE colores SET color=?, descripcion=? WHERE id=?";

$sentencia_update = $gbd->prepare($sql_update);
$sentencia_update->execute(array($color, $descripcion, $id));

header("location:index.php");