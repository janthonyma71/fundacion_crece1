<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Admin html Template : Master</title>
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
<?php 
                    @session_start();
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
                <a class="navbar-brand" href="home.php"><i class="fa fa-gear"></i> <strong>CRECE</strong></a>
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
                        <li><a href="modulos/herramientas.php"><i class="fa fa-gear fa-fw"></i>Herramientas</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="modulos/cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                  <li>
                        <a  href="../home.php"><i class="fa fa-edit"></i> Agregar usuario</a>
                    </li>
                    <li>
                        <a  href="../agregar_paciente.php"><i class="fa fa-edit"></i> Agregar paciente</a>
                    </li>
                    <li>
                        <a class="active-menu" href="../historial_medico.php"><i class="fa fa-bar-chart-o"></i> Historial Medico</a>
                    </li>
                        </ul>
                    </li>
                 
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            MODIFICAR PERFIL      <small>                               <a href="../home.php" ><button class="btn btn-default"> Regresar al inicio</button> </a>
</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default  col-md-8">
                        <div class="panel-heading  col-md-3"> PACIENTES </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                

                                                   

                                       
                                    <form role="form" action="../sql/modificar_perfil.php" method="post">
                                        
                                        <div class="col-md-7">
                                               <label>Usuario:</label>
                                            <input class="form-control" name="peso" required="Nombre" value="<?php echo $usuario2;  ?>">
                                        </div>

                                        <div class="col-md-7">
                                               <label>Nombre:</label>
                                            <input class="form-control" name="temperatura" required="Apellido" value="<?php echo $nombre;  ?>">
                                       </div>
                                        <div class="col-md-7">
                                               <label>Apellido:</label>
                                            <input class="form-control" name="altura" value="<?php echo $apellido;  ?>">
                                        </div>
                                        <div class="col-md-7">
                                               <label>Genero:</label>
                                            <input class="form-control" name="presion" value="<?php echo $genero2;  ?>">
                                        </div>
                                        <div class="col-md-7">
                                        <br>
                                             <label>Fecha:</label>
                                            <input type="date" class="form-control" name="fecha" value="<?php echo $fecha_nacimiento2;  ?>">
                                        </div>
 
                                         <div class="col-md-7">
                                        <br>

                                        </div>


                                                                        
                                         
                                       
                                        <div class="col-md-12">
                                        <br>
                                         <button class="col-md-6"> Guardar  </button> 
                                           <br>
                                        <br>

                                        </div>
                                    <br>
                                    <br>
                                        </div>
                                    </form>
                                      <div class="col-md-12">
                                       <button type="submit" class="btn btn-primary col-md-6" data-toggle="modal" data-target="#myModal"> CAMBIAR CONTRASEÑA </button>
                                        <br>
 <!-- Modal -->
        <form action="../sql/modificar_contraseña.php" method="post" accept-charset="utf-8">       
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Eliminar paciente</h4>
              </div>
              <div class="modal-body">
                ¿Estás seguro de eliminar esta información?
                <input type="hidden" name="id_paciente" value="<?php echo $row['id_paciente']; ?>">
                <input type="hidden" name="id_datos_generales" value="<?php echo $row['id_datos_generales']; ?>">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Si</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!--FIN-->
                                        </div>
                                                                                                              


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
