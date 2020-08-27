<?php 
include 'php/conexion.php';
$usuarioSkills = $_POST['usuarioSkills'];
$titulo  = $_POST['titulo'];
$porcentaje = $_POST['porcentaje'];

$insert = "INSERT INTO actividades VALUES(NULL, '$titulo', NULL, NULL, NULL,
		   $porcentaje, 's', '$usuarioSkills')"; 

$query = mysqli_query($conexion_usuario,$insert);

if(!$query){
	echo "Error al insertar datos";
}else{
	header("Location:skills.php");
	}
 ?>

