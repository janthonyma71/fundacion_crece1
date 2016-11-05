<?php 
require("conexion.php");
$usuario= $_POST['usuario'];
$genero= $_POST['genero'];
$fecha= $_POST['fecha'];
if (isset($_POST['rol']) && $_POST['rol'] == 'Administrador') {
	$rol = 1;
}else{
	$rol = 2; 
}
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$contra= $_POST['usuario'];
$password= md5($contra);

	

	$sql= "INSERT INTO datos_generales (nombre,apellido,fecha_nacimiento,genero) VALUES('$nombre','$apellido','$fecha','$genero')";
	$resultado = $conexion -> query($sql);

	$buscarID= "SELECT id_datos_generales FROM datos_generales WHERE nombre='$nombre' and apellido= '$apellido'";
	$resultado = $conexion -> query($buscarID);

	while( $row = $resultado -> fetch_assoc()){
		   $id_datos_generales = $row['id_datos_generales'];
		}
	echo "<br>".$id_datos_generales;
           
	$sql="INSERT INTO usuario (id_rol,id_datos_generales,estado,password,usuario) VALUES ('$rol','$id_datos_generales','1','$password','$usuario')";
	$resultado = $conexion -> query($sql);

            header("location: ../home.php");


 ?>

