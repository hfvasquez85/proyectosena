<?php
    $mysqli = include_once "../database/conexion.php";
    $idempleado = $_POST["id"];
    $documentType = $_POST["typeDoc"];
    $documentNumber = $_POST["numDoc"];
    $name = $_POST["nombres"];
    $lastName = $_POST["apellidos"];
    $birthDate = $_POST["birthDate"];
    $genre = $_POST["genero"];
    $city = $_POST["ciudadResidencia"];
    $observations = $_POST["observaciones"];
    $queryActualizacion=$mysqli->prepare(
        "UPDATE empleados
        SET tipo_documento = ?, numero_documento = ?, nombres = ?, apellidos = ?, 
        fecha_nacimiento = ?, genero = ?, ciudad_residencia = ?, 
        observaciones = ?
        WHERE idempleado = ?"
    );
    $queryActualizacion->bind_param("sissssssi",$documentType,$documentNumber,
    $name,$lastName,$birthDate,$genre,$city,$observations,$idempleado); 
    $queryActualizacion->execute();
    header("location: listar-empleados.php");
?>
