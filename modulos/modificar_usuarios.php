<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fundacion Crece</title>
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php @session_start();
include("../sql/mostrar.php");
 ?>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        <a class="navbar-brand" href="#"><i class="fa fa-gear"></i> <strong>CRECE</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
      
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil  (<?php echo $nombre.' '.$apellido;?> )</a>
                        </li>
                        <li><a href="herramientas.php"><i class="fa fa-gear fa-fw"></i>Herramientas</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
                  <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 <?php @session_start();
 include_once('../sql/pantalla_modulo.php') ?>


                </ul>
            </div>
        </nav>
        
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Modificar usuarios <small>                              
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"> PACIENTES </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                

                                    <?php 
                    @session_start();

            include("../sql/conexion.php");

            $query = "SELECT id_usuario,usuario, datos_generales.id_datos_generales,datos_generales.nombre, datos_generales.apellido, datos_generales.genero FROM  usuario INNER JOIN datos_generales ON datos_generales.id_datos_generales = usuario.id_datos_generales WHERE id_usuario ='" . $_GET['id'] . "'";
           


            $resultado = $conexion -> query($query);

            $row = $resultado -> fetch_assoc();

            $id_datos_generales = $row['id_datos_generales'];
            $id_usuario = $row['id_usuario'];

         ?>
                               

                                       
  <form role="form" action="../sql/modificar_usuarios.php" method="post">
                                        
                                        <div class="form-group">
                                               <label>Nombre:</label>
                                            <input class="form-control" name="nombre" required="Nombre" value="<?php echo $row['nombre'];  ?>">
                                        </div>

                                        <div class="form-group">
                                               <label>Apellido:</label>
                                            <input class="form-control" name="apellido" required="Apellido" value="<?php echo $row['apellido'];  ?>">
                                        </div>

                                        <div class="form-group">
                                               <label>Usuario:</label>
                                            <input class="form-control" name="usuario" value="<?php echo $row['usuario'];  ?>">
                                        </div>

                                       

                                        
                                        <input type="hidden" value="<?php echo $id_datos_generales; ?>" name="id_datos_generales" >

                                        <input type="hidden" value="<?php echo $id_usuario; ?>" name="id_usuario" >
                                        

   

                                         <button> Modificar  </button> 
                                      
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
