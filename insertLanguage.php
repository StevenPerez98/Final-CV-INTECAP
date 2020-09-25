<?php 
include 'php/conexion.php';
$usuarioLanguage = $_POST['usuarioLanguage'];
$titulo  = $_POST['titulo'];
$porcentaje = $_POST['porcentaje'];

$insert = "INSERT INTO actividades VALUES(NULL, '$titulo', NULL, NULL, NULL,
		   $porcentaje, 'l', '$usuarioLanguage')"; 

$query = mysqli_query($conexion_usuario,$insert);

if(!$query){
	echo "Error al insertar datos";
}else{
	header("Location:languages.php");
	}

 ?>
