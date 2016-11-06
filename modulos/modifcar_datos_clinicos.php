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
                            Modificar Pacientes <small>                               <a href="../historial_medico.php" ><button class="btn btn-default"> Regresar a la tabla</button> </a>
</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"> DATOS CLINICOS </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                

                                    <?php 
                    @session_start();

            include("../sql/conexion.php");

                $query = "SELECT id_datos_clinicos,peso ,temperatura, altura, presion,fecha_visita,diagnostico_preliminar,id_paciente,prioridad_atencion.prioridad_atencion FROM  datos_clinicos INNER JOIN prioridad_atencion ON prioridad_atencion.id_prioridad_atencion = datos_clinicos.id_prioridad_atencion WHERE  id_paciente = '" . $_GET['id'] . "'  AND id_datos_clinicos='" . $_GET['id1'] . "'";
     

            $resultado = $conexion -> query($query);

            $row = $resultado -> fetch_assoc();

            $id_paciente = $row['id_paciente'];
                        $id_datos_clinicos = $row['id_datos_clinicos'];


         ?>
                               

                                       
  <form role="form" action="../sql/modificar_datos_clinicos.php" method="post">
                                        
                                             <div class="col-md-3">
                                               <label>Peso:</label>
                                            <input class="form-control" name="peso" required="Nombre" value="<?php echo $row['peso'];  ?>">
                                        </div>

                                        <div class="col-md-3">
                                               <label>Temperatura:</label>
                                            <input class="form-control" name="temperatura" required="Apellido" value="<?php echo $row['temperatura'];  ?>">
                                       </div>
                                        <div class="col-md-3">
                                               <label>Altura:</label>
                                            <input class="form-control" name="altura" value="<?php echo $row['altura'];  ?>">
                                        </div>
                                        <div class="col-md-3">
                                               <label>Presion:</label>
                                            <input class="form-control" name="presion" value="<?php echo $row['presion'];  ?>">
                                        </div>
                                        <div class="col-md-4">
                                        <br>
                                             <label>Fecha:</label>
                                            <input type="date" class="form-control" name="fecha" value="<?php echo $row['fecha_visita'];  ?>">
                                        </div>
                                        <div class="col-md-4">
                                        <br>
                                             <label>Prioridad Atencion:</label>
                                            <select class="form-control" name ="prioridad" >
                                                <option>Emergencia</option>
                                                <option>Consulta</option>
                                            </select>
                                        </div>
                                                                        
                                        <div class="col-md-4">
                                        <br>
                                          <label>Observaciones:</label>
                                            <input class="form-control" name="observaciones" value="<?php echo $row['diagnostico_preliminar'];  ?>">
                                        </div>  
                                        <input type="hidden" name="id_datos_clinicos" value="<?php echo $id_datos_clinicos;?>">
                                        <div class="col-md-12">
                                        <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">
                                        <div class="col-md-12">
                                        <br>
                                         <button class="col-md-2"> Guardar  </button> 
                                           <br>
                                    <br>
                                    <br>
                                        </div>

                                      
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
