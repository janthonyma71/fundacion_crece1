<?php 
require("conexion.php");

$genero= $_POST['genero'];
$fecha= $_POST['fecha'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$alergias= $_POST['alergias'];
$documento= $_POST['documento'];
$responsable= $_POST['responsable'];
$numero_documento= $_POST['numero_documento'];
$id_datos_generales = $_POST['id_datos_generales'];
$id_paciente = $_POST['id_paciente'];
	
	$sql= "UPDATE  datos_generales SET nombre='$nombre' ,apellido='$apellido' ,fecha_nacimiento='$fecha' ,genero ='$genero' WHERE id_datos_generales ='$id_datos_generales'";
	$resultado = $conexion -> query($sql);
	
           
	$sql="UPDATE paciente SET id_datos_generales='$id_datos_generales' ,alergias='$alergias' ,documento ='$documento' ,responsable='$responsable' ,numero_documento ='$numero_documento' WHERE id_paciente ='$id_paciente' ";
	$resultado = $conexion -> query($sql);

	            header("location: ../historial_medico.php");


 ?>

 