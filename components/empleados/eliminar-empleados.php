<?php
$mysqli = include_once "../database/conexion.php";
if (!isset($_GET["idempleado"])) {
    exit("no se tiene un id");
} else {
    $id_empleado = $_GET["idempleado"];
    $queryEliminacion = $mysqli->prepare("DELETE FROM empleados
        WHERE 
            idempleado = ?");
    $queryEliminacion->bind_param("i", $id_empleado);
    $queryEliminacion->execute();
    header("location: listar-empleados.php");
}
