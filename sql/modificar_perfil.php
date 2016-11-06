<?php 
require("conexion.php");

$genero= $_POST['genero'];
$fecha= $_POST['fecha'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];	
$id_datos_generales = $_POST['id_datos_generales'];
       
$sql="UPDATE datos_generales SET nombre='$nombre' ,apellido='$apellido' ,fecha_nacimiento='$fecha' WHERE id_datos_generales ='$id_datos_generales' ";
$resultado = $conexion -> query($sql);

header("location: ../home.php");


 ?>

 