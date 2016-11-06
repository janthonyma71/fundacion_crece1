<?php 
require("conexion.php");

$peso= $_POST['peso'];
$temperatura= $_POST['temperatura'];
$altura= $_POST['altura'];
$presion= $_POST['presion'];
$fecha= $_POST['fecha'];
if ($_POST['prioridad'] == 'Emergencia') {
	$prioridad = 1;
}else{
	$prioridad = 2;
}
$diagnostico_preliminar= $_POST['observaciones'];
$id_paciente = $_POST['id_paciente'];
$id_datos_clinicos = $_POST['id_datos_clinicos'];




	$sql= "UPDATE   datos_clinicos SET peso = '$peso' ,temperatura='$temperatura' ,altura='$altura' ,presion='$presion' ,fecha_visita='$fecha' ,diagnostico_preliminar='$diagnostico_preliminar', id_prioridad_atencion='$prioridad' WHERE id_paciente='$id_paciente'AND id_datos_clinicos= '$id_datos_clinicos'";

	$resultado = $conexion -> query($sql);


	/*$buscarID= "SELECT id_datos_generales FROM datos_generales WHERE nombre='$nombre' and apellido= '$apellido'";
	$resultado = $conexion -> query($buscarID);

	while( $row = $resultado -> fetch_assoc()){
		   $id_datos_generales = $row['id_datos_generales'];
		}
	echo "<br>".$id_datos_generales;
           
	$sql="INSERT INTO paciente (id_datos_generales,alergias,documento,responsable,numero_documento) VALUES ('$id_datos_generales','$alergias','$documento','$responsable','$numero_documento')";
	$resultado = $conexion -> query($sql);*/


echo "<script language='javascript'>window.location='../modulos/diagnostico_general.php?id=$id_paciente'</script>"; 

 ?>

 