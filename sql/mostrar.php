<?php 
        session_start();
        if (isset($_SESSION['u_usuario'] )) {

$comp=$_SESSION['u_usuario'];
require("conexion.php");
$query = "SELECT datos_generales.nombre, datos_generales.apellido, usuario FROM usuario INNER JOIN datos_generales ON usuario.id_datos_generales = datos_generales.id_datos_generales  WHERE usuario='$comp'";
            $resultado = $conexion -> query($query);

   while( $row = $resultado -> fetch_assoc()){
   $nombre = $row['nombre'];
   $apellido = $row['apellido'];
}


                }
        else 
        {

            header("location: index.html");
        }
    ?>
