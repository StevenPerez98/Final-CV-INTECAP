<?php 
include 'php/conexion.php';

$correlativo = $_GET['skills'];

$instruct = "DELETE FROM actividades WHERE  correlativo = $correlativo";

$resultado = mysqli_query($conexion_usuario,$instruct);

if(!$resultado){
	echo "Error al eliminar";
}else{
	header("Location: skills.php");
}


 ?>
