<?php 
require("conexion.php");



//$contra= $_POST['password'];
//$password= md5($contra);
$usuario= $_POST['usuario'];
$id_usuario = $_POST['id_usuario'];
	
	
	$sql= "SELECT * FROM usuario where usuario = '".$usuario."'";
	$resultado = $conexion -> query($sql) ;
	$fila = mysqli_num_rows($resultado);

if ($fila==0) {
	$sql= "UPDATE  usuario SET usuario='".$usuario."' WHERE id_usuario ='".$id_usuario."'";
	$resultado1 = $conexion -> query($sql);
	echo "Actualizo correctamente";
}
else{

	echo "Ya existe este usuario ";
}

 ?>
