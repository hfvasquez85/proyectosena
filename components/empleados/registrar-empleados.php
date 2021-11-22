<?php
    $mysqli = include_once "../database/conexion.php";
    $documentType = $_POST["typeDoc"];
    $documentNumber = $_POST["numDoc"];
    $name = $_POST["nombres"];
    $lastName = $_POST["apellidos"];
    $birthDate = $_POST["birthDate"];
    $genre = $_POST["genero"];
    $city = $_POST["ciudadResidencia"];
    $observations = $_POST["observaciones"];
    $queryInsercion=$mysqli->prepare(
        "INSERT INTO empleados
        (tipo_documento,numero_documento, nombres, apellidos, fecha_nacimiento, genero, ciudad_residencia, observaciones)
        VALUES
        (?,?,?,?,?,?,?,?)");
    $queryInsercion->bind_param("sissssss",$documentType,$documentNumber,$name,$lastName,$birthDate,$genre,$city,$observations); //mysql prepared 41:29
    $queryInsercion->execute();
    header("location: listar-empleados.php");
?>