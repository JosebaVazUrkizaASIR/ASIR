<?php
//Conectar si no se ha hecho
include_once 'conexion.php';

$id = $_GET['id'];

$sql_delete  = "DELETE FROM colores WHERE id=?";
$sentencia_sql = $gbd -> prepare($sql_delete);
$sentencia_delete->execute(array($id));

header("location:index.php");//redirigir a index