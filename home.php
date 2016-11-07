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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />      
</head>
<body>
<?php 
@session_start();

include("sql/mostrar.php");
?><div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="#"><i class="fa fa-gear"></i> <strong>CRECE</strong></a>
        </div>
            <ul class="nav navbar-top-links navbar-right">                      
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
        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 <?php 
@session_start();

 include_once('sql/pantallas.php') ?>


                </ul>
            </div>
        </nav>
        
        <div id="page-wrapper">
            <div id="page-inner">			
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Agregar Usuario</div>
                            <div class="panel-body">
                               <form role="form" method="POST" action="sql/agregar_usuario.php">
                                        <div class="form-group">
                                            <label>Usuario:</label>
                                            <input class="form-control" name="usuario" required="Usuario">
                                        </div>

                                        <div class="form-group">
                                          <label>Genero:</label>
                                            <select class="form-control" name ="genero">
                                                <option>Femenino</option>
                                                <option>Masculino</option>
                                            </select>                                                       
                                        </div>

                                        <div class="form-group">
                                          <label>Fecha de Nacimiento:</label>
                                          <input type="date" class="form-control" name="fecha">
                                        </div>  

                                        <div class="form-group">
                                           <label>Rol:</label>
                                            <select class="form-control" name ="rol">
                                                <?php
                                                include('sql/conexion.php');
                                                $sql = "SELECT id_rol, rol FROM roles";
                                                $resultado = $conexion -> query($sql);
                                                while( $row = $resultado -> fetch_assoc()){                    
                                                ?>                                          
                                                <option value="<?php echo $row['rol'];?>"><?php echo $row['rol'];?></option>                                           
                                                <?php } ?>
                                            </select>                                                          
                                        </div>

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" name="nombre" required="Nombre">
                                        </div>

                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" name="apellido">
                                        </div> 
                                                                               
                                        <button type="submit" class="btn btn-default">Enviar informacion</button>
                                        <button type="reset" class="btn btn-default">Borrar casillas</button>
                                    </form>
                                     <?php
                            if (isset($_GET['mod'])) {
                             
                         if ($_GET['mod'] == 1) {
                            echo  '<font color="#1e9500"">¡Excelente! Ingreso Usuario </font>';
                          }
                                                     
                             } 
                          
                             else if (isset($_GET['error'])) {
                             
                          if ($_GET['error'] == 2) {
                            echo  '<font color="#FE2E2E"">ERROR! USUARIO YA EXISTE </font>';
                          }
                           
                             } 
                             else{


                             }
                         
                         
                               ?>
                                <div class="text-right">
                            </div>
                        </div>
                    </div>
                </div>		
		        <footer><p>Aplicacion creada por Anthony Melgar & Miguel Martinez</a></p>    
                </footer>        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>	
	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	<!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>