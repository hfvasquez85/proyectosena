<?php
$mysqli = include_once "../database/conexion.php";
$id_empleado = $_GET["idempleado"];
$resultadoQuery = $mysqli->prepare("SELECT idempleado, 
    tipo_documento, 
    numero_documento, 
    nombres, 
    apellidos, 
    fecha_nacimiento, 
    genero, 
    ciudad_residencia, 
    observaciones
FROM empleados WHERE idempleado=?");
$resultadoQuery->bind_param("i", $id_empleado);
$resultadoQuery->execute();
$resultadoData = $resultadoQuery->get_result();
$infoEmpleado = $resultadoData->fetch_assoc();
if (!$infoEmpleado) {
    exit("No existe información para el id que se envió");
}
?>

<?php include_once "../common/encabezado.php" ?>
<link rel="stylesheet" href="empleados.css">
</head>

<body class="inner_page media_gallery">
    <div class="full_container">
        <div class="inner_container">


            <!-- Sidebar  -->
            <?php include_once "../common/sidebar.php" ?>
            <!-- end sidebar -->


            <!-- right content -->
            <div id="content">


                <!-- topbar -->
                <?php include_once "../common/topbar.php" ?>
                <!-- end topbar -->


                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Módulo Empleados</h2>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row column4 graph">
                            <!-- Gallery section -->
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Registrar Empleado</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">



                                            <div class="container mt-5 mb-5 d-flex justify-content-center">
                                                <div class="card px-1 py-4">

                                                    <div class="row">
                                                        <div class="col-12 contenedor">

                                                            <form class="main-form" action="actualizar-empleados.php" method="POST">

                                                                <input type="hidden" name="id" id="id" value="<?php echo $id_empleado ?>">

                                                                <div class="mb-3">
                                                                    <label for="numDoc" class="form-label">Tipo Documento</label>
                                                                    <input value="<?php echo $infoEmpleado["tipo_documento"] ?>" required type="text" 
                                                                    class="form-control" name="typeDoc" id="typeDoc" placeholder="CC, TI, CE">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="numDoc" class="form-label">Número Documento</label>
                                                                    <input value="<?php echo $infoEmpleado["numero_documento"] ?>" required type="number" 
                                                                    class="form-control" name="numDoc" id="numDoc" placeholder="Unicamente números">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="nombres" class="form-label">Nombres</label>
                                                                    <input value="<?php echo $infoEmpleado["nombres"] ?>" required type="text" 
                                                                    class="form-control" name="nombres" id="nombres" placeholder="Nombres completos">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="apellidos" class="form-label">Apellidos</label>
                                                                    <input value="<?php echo $infoEmpleado["apellidos"] ?>" required type="text" 
                                                                    class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos completos">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="birthDate" class="form-label">Fecha Nacimiento</label>
                                                                    <input value="<?php echo $infoEmpleado["fecha_nacimiento"] ?>" type="date" 
                                                                    class="form-control" name="birthDate" id="birthDate" placeholder="Formato dd-mm-aaa">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label required for="genero" class="form-label">Género</label>
                                                                    <input value="<?php echo $infoEmpleado["genero"] ?>" type="text" 
                                                                    class="form-control" name="genero" id="genero">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="ciudadResidencia" class="form-label">Ciudad de Residencia</label>
                                                                    <input value="<?php echo $infoEmpleado["ciudad_residencia"] ?>" required type="text" 
                                                                    class="form-control" name="ciudadResidencia" id="ciudadResidencia">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="observaciones" class="form-label">Observaciones</label>
                                                                    <textarea value="<?php echo $infoEmpleado["observaciones"] ?>" 
                                                                    class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                                                                </div>

                                                                <div class="mb3">
                                                                    <button class="btn btn-success">Guardar</button>
                                                                    <a class="btn btn-info" href="../loginUsuario/pagina_principal.php">Retornar</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="footer">
                                    <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
            <!-- model popup -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end model popup -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- fancy box js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- calendar file css -->
    <script src="js/semantic.min.js"></script>
</body>