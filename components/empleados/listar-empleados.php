<?php
    $mysqli = include_once "../database/conexion.php";
    $resultadoQuery = $mysqli->query("SELECT idempleado, tipo_documento, numero_documento, 
    nombres, apellidos, fecha_nacimiento, genero, ciudad_residencia, observaciones
    FROM empleados");
    $listadoEmpleados = $resultadoQuery->fetch_all(MYSQLI_ASSOC);
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
                                            <h2>Listar Empleados</h2>
                                        </div>
                                    </div>
                                    <div class="full gallery_section_inner padding_infor_info">
                                        <div class="row">




                                            <!-- table section -->
                                            <div class="col-md-12">
                                                <div class="white_shd full margin_bottom_30">

                                                    <div class="table_section padding_infor_info">
                                                        <div class="table-responsive-sm">
                                                            <table class="table table-dark table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Id</th>
                                                                        <th scope="col">Tipo Documento</th>
                                                                        <th scope="col">Numero Documento</th>
                                                                        <th scope="col">Nombres</th>
                                                                        <th scope="col">Apellidos</th>
                                                                        <th scope="col">Fecha Nacimiento</th>
                                                                        <th scope="col">Genero</th>
                                                                        <th scope="col">Ciudad Residencia</th>
                                                                        <th scope="col">Observaciones</th>
                                                                        <th scope="col">Editar</th>
                                                                        <th scope="col">Eliminar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($listadoEmpleados as $listadoIndividual) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $listadoIndividual["idempleado"] ?></td>
                                                                            <td><?php echo $listadoIndividual["tipo_documento"] ?></td>
                                                                            <td><?php echo $listadoIndividual["numero_documento"] ?></td>
                                                                            <td><?php echo $listadoIndividual["nombres"] ?></td>
                                                                            <td><?php echo $listadoIndividual["apellidos"] ?></td>
                                                                            <td><?php echo $listadoIndividual["fecha_nacimiento"] ?></td>
                                                                            <td><?php echo $listadoIndividual["genero"] ?></td>
                                                                            <td><?php echo $listadoIndividual["ciudad_residencia"] ?></td>
                                                                            <td><?php echo $listadoIndividual["observaciones"] ?></td>
                                                                            <td>
                                                                                <a href="editar-empleados.php?idempleado=<?php echo $listadoIndividual["idempleado"] ?>">Editar</a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="eliminar-empleados.php?idempleado=<?php echo $listadoIndividual["idempleado"] ?>">Eliminar</a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- table section -->





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
    <?php include_once "../common/script.php" ?>
</body>