<?php 
include 'php/conexion.php';
$usuarioTrabajo = $_POST['usuarioTrabajo'];
$titulo = $_POST['titulo'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$descripcion = $_POST['descripcion'];


$insert = "INSERT INTO actividades VALUES(NULL, '$titulo', '$fechaInicio', '$fechaFin', '$descripcion ',
		   Null, 't', '$usuarioTrabajo')"; 
		   
$query = mysqli_query($conexion_usuario, $insert);

if(!$query){
	echo "Error al insertar datos";
	}else{
		header("location:jobExperiences.php");
	}
 ?>
