<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - Subsecretaría de Transporte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.css'); ?>">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Subsecretaría de Transporte</h3>
                <strong>ST</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo base_url('Dashboard/index'); ?>" class="active">
                        <i class="fas fa-home"></i>
                        <span class="slide">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        <span>Estructura Interna</span>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#pageDireccion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <span>DGRPT</span>
                            </a>
                            <ul class="collapse list-unstyled" id="pageDireccion">
                                <li>
                                    <a href="#" id="1" name="1">
                                        <span>Subdirección de Concentración y Vinculación de Bases de Datos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="2" name="2">
                                        <span>Subdirección de Archivo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="3" name="3">
                                        <span>Subdirección de Enlace con REPUVE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="4" name="4">
                                        <span>Subdirección de Información Registral</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pageValidacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <span>Subdirección de Validación y Proceso Registral</span>
                                    </a>
                                    <ul class="collapse list-unstyled" id="pageValidacion">
                                        <li>
                                            <a href="#" id="5" name="5">
                                                <span>Validación del Transporte</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="8" name="8">
                                                <span>Módulo de Atención</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageReportes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-chart-area"></i>
                        <span>Reportes</span>
                    </a>
                    <ul class="collapse list-unstyled" id="pageReportes">
                        <li>
                            <a href="#" id="6" name="6">
                                <span>Generación de Reportes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="7" name="7">
                                <span>Estadisticas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('Inicio/index')?>">
                        <i class="fas fa-power-off"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <span id="time"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div name="principal" id="principal">
                <img src="<?php echo base_url('assets/img/Logo-cdmx.png');?>" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('assets/js/jquery.dataTables.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/dataTables.bootstrap4.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js'); ?>"></script>
    <!-- Popper.JS -->
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/tooltip.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/moment.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
       function getDateTime() {
           var now = new Date();
           var year = now.getFullYear();
           var month = now.getMonth() + 1;
           var day = now.getDate();
           var hour = now.getHours();
           var minute = now.getMinutes();
           var second = now.getSeconds();

           if (month.toString().length == 1) {
               month = '0' + month;
           }
           if (day.toString().length == 1) {
               day = '0' + day;
           }
           if (hour.toString().length == 1) {
               hour = '0' + hour;
           }
           if (minute.toString().length == 1) {
               minute = '0' + minute;
           }
           if (second.toString().length == 1) {
               second = '0' + second;
           }

           var dateTime = day + '-' + month + '-' + year + ' '+ hour + ':' + minute + ':' + second;
           $(".form_datetime").datetimepicker({
               format: "yyyy-mm-dd",
               weekStart: 1,
               todayBtn: true,
               autoclose: true,
               todayHighlight: true,
               startView: 2,
               minView: 2,
               forceParse: 0
           });

           $(".edit_form_datetime").datetimepicker({
               format: "yyyy-mm-dd",
               weekStart: 1,
               todayBtn: true,
               autoclose: true,
               todayHighlight: true,
               startView: 2,
               minView: 2,
               forceParse: 0
           });
           return dateTime;
       }

       setInterval(function () {
           currentTime = getDateTime();
           document.getElementById('time').innerHTML = currentTime;
       }, 1000);
    </script>
    <script type="text/javascript">
        $("#1").click(function (event) {
            $("#principal").load("<?php echo base_url('BaseController/index');?>");
        });

        $("#2").click(function (event) {
            $("#principal").load("<?php echo base_url('ConcentracionBaseDatos/indexArchivo');?>");
        });

        $("#3").click(function (event) {
            $("#principal").load("<?php echo base_url('RepuveController/index');?>");
        });

        $("#4").click(function (event) {
            $("#principal").load("<?php echo base_url('ConcentracionBaseDatos/indexRegistral');?>");
        });

        $("#5").click(function (event) {
            $("#principal").load("<?php echo base_url('ValidacionController/index');?>");
        });

        $("#6").click(function (event) {
            $("#principal").load("<?php echo base_url('Reportes/indexReportes');?>");
        });

        $("#7").click(function (event) {
            $("#principal").load("<?php echo base_url('Reportes/indexEstadisticas');?>");
        });

        $("#8").click(function (event) {
            $("#principal").load("<?php echo base_url('ValidacionController/indexAtencion');?>");
        });
    </script>


</body>
</html>