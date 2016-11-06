<?php 
@session_start();
if (isset($_SESSION['u_usuario'] )) {
$comp=$_SESSION['u_usuario'];
$password1 = $_SESSION['p_password'];
require("conexion.php");
$query = "SELECT id_usuario,datos_generales.id_datos_generales,datos_generales.nombre, datos_generales.apellido, usuario,password, datos_generales.fecha_nacimiento, datos_generales.genero FROM usuario INNER JOIN datos_generales ON usuario.id_datos_generales = datos_generales.id_datos_generales  WHERE usuario='$comp'";
            $resultado = $conexion -> query($query);
   while( $row = $resultado -> fetch_assoc()){
   $nombre = $row['nombre'];
   $apellido = $row['apellido'];
   $password =$row['password'];
   $usuario2 = $row['usuario'];
   $fecha_nacimiento2 = $row['fecha_nacimiento'];
   $genero2 = $row['genero'];
   $id_usuario = $row['id_usuario'];
   $id_datos_generales = $row['id_datos_generales'];
    }
   }else{
    header("location: index.html");
  }
?>
