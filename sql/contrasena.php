<<<<<<< HEAD
=======
<?php 
require("conexion.php");
@session_start();
$usuario= $_POST['usuario'];
$id_usuario = $_POST['id_usuario'];
$contra= $_POST['password'];
$password= md5($contra);

/*Se toma de sesion el usuario y si es el mismo que el post trae, entonces quiere modificar la contraseña, pero si trae diferente un usuario diferente al de sesion, quiere decir que quiere modificar el usuario*/
if (isset($_SESSION['u_usuario']) && $_SESSION['u_usuario'] == $usuario) {
	$sql="UPDATE usuario SET password = '$password' WHERE id_usuario = $id_usuario";
	$resultado = $conexion -> query($sql);
	echo "<br>Cuando el usuario es el mismo en sesión, pero la contraseña no; se actualizó la contraseña";
}else{
	//Se verifica si el usuario existe
	$sql= "SELECT * FROM usuario where usuario = '$usuario'";
	$resultado = $conexion -> query($sql) ;
	$fila = mysqli_num_rows($resultado);
	if ($fila==0) {
		$sql= "UPDATE  usuario SET usuario='$usuario' WHERE id_usuario ='$id_usuario'";
		$resultado1 = $conexion -> query($sql);
		echo "Actualizo correctamente el usuario";
	}else{
		echo "Este usuario ya existe";
	}	
}
?>
>>>>>>> 44e54cae991ba9fb06888dd4773bc6192bedd114
