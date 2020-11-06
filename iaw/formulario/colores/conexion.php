<?php

$link = 'mysql:host=localhost;dbname=colores';
$usuario = 'root';
$pwd = '';

try{
    $gbd = new PDO($link, $usuario, $pwd);//Guarda la informacion de la conexion
    print "Conectado";
} catch(PDOException $e){
    print "Error: " .$e->getMessage() ."<br/>";
}


?>