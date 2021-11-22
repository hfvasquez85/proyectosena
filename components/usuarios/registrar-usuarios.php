<?php
    $mysqli = include_once "../database/conexion.php";
    $emailUser = $_POST["email"];
    $passwUser = $_POST["passw"];
    $idEmpleado = $_POST["idEmpleado"];
    $hashedPassword= md5($passwUser);
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO usuarios
        (correo, password, idempleado)
        VALUES
        (?,?,?)");
    $queryInsercion->bind_param("ssi",$emailUser,$hashedPassword,$idEmpleado);
    $queryInsercion->execute();
    header("location: listar-usuarios.php");
?>