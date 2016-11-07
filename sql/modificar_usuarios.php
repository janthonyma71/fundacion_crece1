<?php 
require("conexion.php");

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$usuario= $_POST['usuario'];

$id_datos_generales = $_POST['id_datos_generales'];
$id_usuario = $_POST['id_usuario'];
	
	$identificador = $_GET['id'];
	$sql= "UPDATE  datos_generales SET nombre='$nombre' ,apellido='$apellido' WHERE id_datos_generales ='$id_datos_generales'";
	$resultado = $conexion -> query($sql);
	
           
	$sql="UPDATE usuario SET id_datos_generales='$id_datos_generales' , usuario='$usuario' WHERE id_usuario ='$id_usuario'";
	$resultado = $conexion -> query($sql);

	            header("location: ../tabla_usuarios.php");


 ?>

 