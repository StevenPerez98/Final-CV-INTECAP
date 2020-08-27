<?php 
include 'php/conexion.php';

$correlativo = $_REQUEST['correlativo'];
$titulo = $_POST['titulo'];
$porcentaje = $_POST['porcentaje'];


$instruct = "UPDATE actividades SET titulo ='$titulo',
porcentaje = '$porcentaje' WHERE correlativo = $correlativo";

$query = mysqli_query($conexion_usuario,$instruct);

if(!$query){
	echo "Error al actualizar";
}else{
	header("Location: skills.php");
}
 ?>