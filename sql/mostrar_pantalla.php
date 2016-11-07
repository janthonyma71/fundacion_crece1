<?php 
@session_start();

require("conexion.php");
$query = "SELECT usuario, roles.id_rol, pantalla.descripcion_pantalla, pantalla.patalla FROM usuario INNER JOIN roles ON usuario.id_rol = roles.id_rol INNER JOIN pantalla ON pantalla.id_rol = roles.id_rol WHERE usuario='$comp'";

            $resultado = $conexion -> query($query);
   while( $row = $resultado -> fetch_assoc()){
   $pantalla = $row['descripcion_pantalla'];
   $direc = $row['patalla'];

    }
 
?>
