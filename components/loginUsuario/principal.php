<?php include_once "../common/encabezado.php" ?>
</head>

<body class="dashboard dashboard_1">

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

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-xl-7 mb-lg-0 py-5 py-md-6">
                            <div class="lc-block mb-3 mb-md-5 lh-1">
                                <div editable="rich">
                                    <h1 class="rfs-30 text-primary">Desarrollo de Infraestructura</h1>
                                </div>
                            </div><!-- /lc-block -->
                            <div class="lc-block">
                                <a class="btn btn-lg btn-dark" href="#" role="button">Ir a Modulos</a>
                            </div><!-- /lc-block -->
                        </div><!-- /col -->
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="lc-block px-md-4 px-lg-5 lh-lg">
                                <div editable="rich">
                                    <p class="rfs-7"> El centro de nuestra operación es el desarrollo de infraestructura en su 
                                        ciclo completo: Promovemos, diseñamos y construimos proyectos; prestamos servicios 
                                        especializados y realizamos inversiones en obras de infraestructura y en el sector 
                                        energético.
                                    </p>
                                </div>
                            </div><!-- /lc-block -->
                        </div><!-- /col -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 g-0">
                            <div class="lc-block">
                                <a href="../loginUsuario/principal.php">
                                    <img class="img-fluid w-100" src="../../images/landing_page/quienesomos.jpg" style="object-fit:cover; max-height:45vh">
                                </a>
                            </div><!-- /lc-block -->
                        </div><!-- /col -->
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 d-flex justify-content-center align-items-baseline">
                            <div class="lc-block py-4 me-3">
                                <div editable="rich">
                                    <h4 class="fw-bolder">1994</h4>
                                </div>
                            </div><!-- /lc-block -->
                            <div class="lc-block py-4">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="2em" height="2em" viewBox="0 0 24 24"  lc-helper="svg-icon" fill="currentColor">
                                    <path d="M23,12L19,16V13H6.83C6.42,14.17 5.31,15 4,15A3,3 0 0,1 1,12A3,3 0 0,1 4,9C5.31,9 6.42,9.83 6.83,11H19V8L23,12Z"></path>
                                </svg>

                            </div><!-- /lc-block -->
                            <div class="lc-block py-4 ms-3">
                                <div editable="rich">
                                    <h4 class="fw-bolder"> 2021</h4>
                                </div>
                            </div><!-- /lc-block -->
                        </div><!-- /col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "../common/script.php" ?>
</body>

</html>