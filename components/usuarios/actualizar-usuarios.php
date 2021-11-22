<?php
    $mysqli = include_once "../database/conexion.php";
    $emailUser = $_POST["email"];
    $passwUser = $_POST["passw"];
    $idEmpleado = $_POST["idEmpleado"];
    $idUser = $_POST["id"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE usuarios
        SET correo = ?, password = ?, idempleado = ?
        WHERE idusuario = ?"
    );
    $queryActualizacion->bind_param("ssii",$emailUser,$passwUser,$idEmpleado,$idUser);
    $queryActualizacion->execute();
    header("location: listar-usuarios.php");
?>