<?php	

include("../sql/conexion.php");

$id_paciente = $_POST['id_paciente'];
$id_datos_generales = $_POST['id_datos_generales'];

$buscar= "SELECT paciente.id_paciente, datos_clinicos.id_datos_clinicos FROM paciente INNER JOIN datos_clinicos ON paciente.id_paciente=datos_clinicos.id_paciente where paciente.id_paciente = $id_paciente";
$resultado = $conexion -> query($buscar);
$row = $resultado -> fetch_assoc();

if ($row == "") {
	$sql="DELETE FROM paciente WHERE id_paciente = $id_paciente";
	$resultado = $conexion -> query($sql);
	$sql1="DELETE FROM datos_generales WHERE id_datos_generales = $id_datos_generales";
	$resultado1 = $conexion -> query($sql1);
	//echo "Se elimino sin datos clinicos";
}else{
	$sql3="Delete from datos_clinicos where id_paciente = $id_paciente";
	$resultado3 = $conexion -> query($sql3);
	$sql="DELETE FROM paciente WHERE id_paciente = $id_paciente";
	$resultado = $conexion -> query($sql);
	$sql1="DELETE FROM datos_generales WHERE id_datos_generales = $id_datos_generales";
	$resultado1 = $conexion -> query($sql1);
	//echo "Se elimino CON datos clinicos";
}

header("location: ../historial_medico.php");

?>

