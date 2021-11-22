<?php
session_start();
if (isset($_SESSION['nombreUsuario'])) {
    header('location: principal.php');
} else {
    if (isset($_POST['login'])) {
        $mysqli = include_once "../database/conexion.php";
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $hashedPassword = md5($password);
        $resultadoQuery = $mysqli->prepare(
            "SELECT * FROM usuarios WHERE correo=? AND password=?"
        );
        $resultadoQuery->bind_param('ss', $correo, $password);
        $resultadoQuery->execute();
        $resultadoData = $resultadoQuery->get_result();
        $infoUsuario = $resultadoData->fetch_assoc();
        if (!isset($_SESSION['nombreUsuario'])) {
            if (!$infoUsuario) {
                echo "<script>alert('El usuario no existe en la bd'); window.location = 'index.php'</script>";
            } else {
                $_SESSION['nombreUsuario'] = $correo;
                header('location: principal.php');
            }
        }
    }
}
?>

<?php include_once "../common/encabezado.php" ?>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="300" src="../../images/logo/latincoLogo.png" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="POST">
                            <fieldset>
                                <div class="field">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="correo" id="correo" placeholder="E-mail" />
                                </div>
                                <div class="field">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                </div>
                                <div class="field">
                                    <label class="form-label hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                                    <a class="forgot" href="">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="form-label hidden">hidden label</label>
                                    <button class="main_bt" type="submit" name="login" id="login">Sing In</button>
                                    <!-- <input class="btn btn-primary" type="submit" value="Iniciar Sesión" name="login" id="login"> -->
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../common/script.php" ?>
</body>

</html>