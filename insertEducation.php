<?php 
include 'php/conexion.php';
$usuarioEducation = $_POST['usuarioEducation'];
$titulo = $_POST['titulo'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$descripcion = $_POST['descripcion'];


$insert = "INSERT INTO actividades VALUES(NULL, '$titulo', '$fechaInicio', '$fechaFin', '$descripcion ',
		   Null, 'e', '$usuarioEducation')"; 

$query = mysqli_query($conexion_usuario, $insert);

if(!$query){
	echo "Error al enviar datos";
}else{
	header("location:educationExperiences.php");
}

 ?>