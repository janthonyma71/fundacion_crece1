<?php 
require("conexion.php");

$genero= $_POST['genero'];
$fecha= $_POST['fecha'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$usuario= $_POST['usuario'];
$id_usuario = $_POST['id_usuario'];
	
$id_datos_generales = $_POST['id_datos_generales'];
	
	$sql= "UPDATE  usuario SET  usuario='$usuario' WHERE id_usuario ='$id_usuario'";
	$resultado = $conexion -> query($sql);
	
           
	$sql="UPDATE datos_generales SET nombre='$nombre' ,apellido='$apellido' ,fecha_nacimiento='$fecha' WHERE id_datos_generales ='$id_datos_generales' ";
	$resultado = $conexion -> query($sql);

	            header("location: ../home.php");


 ?>

 