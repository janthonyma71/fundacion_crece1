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

	$buscarID= "SELECT id_datos_generales FROM datos_generales WHERE nombre='$nombre' and apellido= '$apellido'";
	$resultado = $conexion -> query($buscarID);

	while( $row = $resultado -> fetch_assoc()){
		   $id_datos_generales = $row['id_datos_generales'];
		}
	echo "<br>".$id_datos_generales;
           
	$sql="INSERT INTO paciente (id_datos_generales,alergias,documento,responsable,numero_documento) VALUES ('$id_datos_generales','$alergias','$documento','$responsable','$numero_documento')";
	$resultado = $conexion -> query($sql);
            header("location: ../agregar_paciente.php");

 ?>

 