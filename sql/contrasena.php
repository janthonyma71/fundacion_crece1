<?php 
require("conexion.php");



$contra= $_POST['password'];
$password= md5($contra);
$usuario= $_POST['usuario'];
$id_usuario = $_POST['id_usuario'];
	
	
	$sql= "UPDATE  usuario SET  usuario='$usuario', password='$password' WHERE id_usuario ='$id_usuario'";
	$resultado = $conexion -> query($sql);
	
	            header("location: ../modulos/cerrar_sesion.php");


 ?>
