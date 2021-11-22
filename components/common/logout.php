<?php
    @session_start();
    session_destroy();
    header("Location: ../loginUsuario/index.php");
?>