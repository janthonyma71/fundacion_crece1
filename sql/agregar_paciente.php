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

	$sql= "INSERT INTO datos_generales (nombre,apellido,fecha_nacimiento,genero) VALUES('$nombre','$apellido','$fecha','$genero')";
	$resultado = $conexion -> query($sql);

	$id_datos_generales = mysqli_insert_id($conexion);
           
	$sql="INSERT INTO paciente (id_datos_generales,alergias,documento,responsable,numero_documento) VALUES ('$id_datos_generales','$alergias','$documento','$responsable','$numero_documento')";
	$resultado = $conexion -> query($sql);
            
    header("location: ../agregar_paciente.php");

 ?>

 