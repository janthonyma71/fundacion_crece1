<?php 
include('conexion.php');
include('mostrar.php');

$id_paciente = $_POST['id_paciente'];
$id_datos_clinicos = $_POST['id_datos_clinicos'];


$sql = "DELETE FROM datos_clinicos where id_datos_clinicos = $id_datos_clinicos && id_paciente = $id_paciente";
$resultado = $conexion -> query($sql);
	


if ($id_rol==1) {
            header("location: ../historial_medico.php");
		
    }
    else{
           header("location: ../historial_medico_usuario.php");


    }

?>