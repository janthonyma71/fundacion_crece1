<?php	

include("../sql/conexion.php");

$id_paciente = $_POST['id_paciente'];
$id_datos_generales = $_POST['id_datos_generales'];


$sql="DELETE FROM paciente WHERE id_paciente = $id_paciente";
$resultado = $conexion -> query($sql);
$sql1="DELETE FROM datos_generales WHERE id_datos_generales = $id_datos_generales";
$resultado1 = $conexion -> query($sql1);

header("location: ../historial_medico.php");

?>

