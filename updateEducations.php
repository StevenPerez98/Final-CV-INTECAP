<?php 
include 'php/conexion.php';

$correlativo = $_REQUEST['correlativo'];
$titulo = $_POST['titulo'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$descripcion = $_POST['descripcion'];

$instruct = "UPDATE actividades SET titulo ='$titulo',
fechaInicio = '$fechaInicio', fechaFin = '$fechaFin',
descripcion = '$descripcion' WHERE correlativo = $correlativo";

$query = mysqli_query($conexion_usuario,$instruct);

if(!$query){
	echo "Error al actualizar";
}else{
	header("Location: educationExperiences.php");
}
 ?>