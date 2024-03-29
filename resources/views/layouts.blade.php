<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/fab1.png">
    <title>@yield('title','Aprendible')</title>
    <!-- Custom CSS -->
       <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/quill/dist/quill.snow.css">
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../assets/complemento.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="banner-sipefab">
        <img src="../../assets/images/banner-sipefab.jpeg">
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/fab1.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff !important;"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" style="margin-right: 10px;">ADMINISTRADOR</a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target=".MiPerfil"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target=".CambioContrasena"><i class="ti-settings m-r-5 m-l-5"></i> Configuración</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="" data-toggle="modal" data-target=".MiPerfil" class="btn btn-sm btn-success btn-rounded">Ver mi Perfil</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu">Información Personal </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/personal.registro_personal" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Registrar Personal </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('personal.registros_adicionales') }}" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Registros Adicionales </span></a></li>
                                <li class="sidebar-item"><a href="/personal.actualizar_registros" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Actualizar Registros </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Datos Familiares </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Datos Físicos </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-certificate"></i><span class="hide-menu">Desempeño Profesional </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Premios y Distinciones </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Brevetaciones </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Revistas Militares </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Docencia Militar </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Miembros de Tribunales </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Elaboracion de Publicaciones </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-graduation-cap"></i><span class="hide-menu">Formación Profesional </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/cursos.listar_cursos" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Cursos Realizados </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Profesión Libre </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bookmark"></i><span class="hide-menu">Otros Items </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Componente de CIES y EME </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Proyectos de Ingeniería </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Represent. y Delegaciones </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Cargos y Destinos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Designaciones </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-caret-right"></i><span class="hide-menu"> Destinos </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="fas fa-filter"></i><span class="hide-menu">Faltas Disciplinarias</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-file-pdf-box"></i><span class="hide-menu">Reportes</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Seccion editable  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')

        </div>
        <footer class="footer text-center">
                Software desarrollado por la Seccion Desarrollo de la Direccion General de Tecnologias de Informacion y Comunicacion <a href="#">DIGETIC-FAB</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End Seccion editable  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>






    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>


    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>
</html>


<!-- modal mi perfil -->
<div class="modal fade MiPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">MI PERFIL DE USUARIO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="card-title">Datos de mi Perfil</h5>
            <div class="card">
                <div class="contenido-modal">
                    <div class="imagen-modal">
                       <img src="../../assets/images/users/1.jpg"> 
                    </div>
                    <div class="detalle-modal">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label>Carnet Militar<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Grado<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Nombres<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Apellido Paterno<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
        </div>
    </div>
  </div>
</div>


<!-- modal cambiar contraseña -->
<div class="modal fade CambioContrasena" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">CAMBIAR CONTRASEÑA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="card-title">Formulario para cambiar de contraseña de mi cuenta</h5>
            <div class="card">
                <div class="contenido-modal">
                    <div class="imagen-modal">
                       <img src="../../assets/images/users/1.jpg"> 
                    </div>
                    <div class="detalle-modal">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label>Carnet Militar<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Grado<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Nombres<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                                <div class="col-lg-3">
                                    <label>Apellido Paterno<small class="text-muted"></small></label>
                                    <strong>31208994</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label>Contraseña Actual<small class="text-muted">(*)</small></label>
                            <input type="password" class="form-control" placeholder="" data-toggle="tooltip" title="Inserte Contraseña Actual">
                        </div>
                        <div class="col-lg-4">
                            <label>Nueva Contraseña<small class="text-muted">(*)</small></label>
                            <input type="password" class="form-control" placeholder="" data-toggle="tooltip" title="Nueva Contraseña">
                        </div>
                        <div class="col-lg-4">
                            <label>Repita la Contraseña <small class="text-muted">(*)</small></label>
                            <input type="password" class="form-control" placeholder="" data-toggle="tooltip" title="Repita la Contraseña">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info">Actualizar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Modal</button>
        </div>
    </div>
  </div>
</div>