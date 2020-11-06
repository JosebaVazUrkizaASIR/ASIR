<?php

$nombre = trim($_REQUEST['nombre']);



if($nombre == ""){
    print "<p>NO HAS INTRODUCIDO UN NOMBRE</p>";
}
else{
    print "<p>El nombre es: $_REQUEST[nombre]</p>";
}

if (isset($_REQUEST['aceptar'])){
    print "<p>Has aceptado</p>";
}
else{
    print "<p>No has aceptado</p>";
}


if(isset($_REQUEST['ciclos'])){
    $ciclo = $_REQUEST["ciclos"];
    if($ciclo=="DAW"){
        print "<p>Vas a hacer paginas bonitas</p>";
    }elseif($ciclo == "DAM"){
        print "<p>Vas a hacer videojuegos bonitos</p>";
    }else{
        print "<p>Vas a montar una red de UNI Encounter</p>";
    }
}

if(isset($_REQUEST["intereses2"])){
    print "<p>Tiene intereses</p>";
    $intereses2 = $_REQUEST["intereses2"];

    foreach($intereses2 as $interes){
        print "<p>Estas interesado en $interes</p>";
    }
}else{
    print "<p>No tiene intereses</p>";
}
?>