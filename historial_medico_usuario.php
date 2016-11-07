<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fundacion Crece</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php 
@session_start();

include("sql/mostrar.php");
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
              <li>
                <a href="#"><i class="fa fa-user fa-fw"></i>Perfil(<?php echo $nombre.' '.$apellido;?> )
                </a>
              </li>
              <li>
                <a href="modulos/herramientas.php"><i class="fa fa-gear fa-fw"></i>Herramientas
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="modulos/cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion
                </a>
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
 include_once('sql/pantallas.php') ?>


                </ul>
            </div>
        </nav>
      <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <h1 class="page-header">
                  Tabla De Pacientes <small></small>
                </h1>
              </div>
            </div>
            <!-- /. ROW  -->              
            <div class="row">
              <div class="col-md-12">
              <!-- Advanced Tables -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    PACIENTES                        
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Alergias</th>
                          <th>Responsable</th>
                          <th>Documento</th>
                          <th>Operacion</th>
                        </tr>
                      </thead>
              <tbody>
              <?php 
                include("sql/conexion.php");
                $query = "SELECT id_paciente,alergias, responsable, numero_documento, datos_generales.nombre, datos_generales.apellido, datos_generales.id_datos_generales FROM  paciente INNER JOIN datos_generales ON datos_generales.id_datos_generales = paciente.id_datos_generales";
                $resultado = $conexion -> query($query);
                while ($row = $resultado -> fetch_assoc()) {
              ?>                               
               <tr>
                 <td><?php echo $row['nombre']; ?> </td>
                 <td><?php echo $row['apellido']; ?> </td>
                 <td><?php echo $row['alergias']; ?> </td>
                 <td><?php echo $row['responsable']; ?> </td>
                 <td><?php echo $row['numero_documento']; ?> </td>
                 <th> 
                 <a href="modulos/diagnostico_general_usuario.php?id=<?php echo $row['id_paciente'];?>"> Añadir Datos Clinicos</a> 
                 
              </th>
              </tr><?php  } ?>                                           
              </tbody>
            </div>
          </table>
        </div>
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