<?php 
include('../sql/conexion.php');
session_start();
$usuario = $_POST['username'];
$contraa = $_POST['password'];
$contra = md5($contraa);
	$proceso = $conexion -> query("SELECT * FROM usuario WHERE usuario='$usuario' AND password='$contra'");
	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		$_SESSION['p_password'] = $contraa;
		header("location: ../home.php");
	}else{
		header("location: ../index.php?error=1");
	}
?>