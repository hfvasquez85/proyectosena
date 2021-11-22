<?php
    $host="localhost";
    $usuario="root";
    $password="";
    $base_datos="proyectodb";
    $mysqli=new mysqli($host,$usuario,$password, $base_datos);
    if($mysqli->connect_errno){
        echo "falló la conexión a ala base de datos".$mysqli->connect_error;
    }
    return $mysqli;
?>