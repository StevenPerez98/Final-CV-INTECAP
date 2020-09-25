<?php 
include 'php/conexion.php';
session_start();
  if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){

  }else{
    header('location: login.php');
    exit;
  }
$user_name = $_SESSION['usuario'];
  $datos = $conexion_usuario->query("SELECT * FROM usuario WHERE usuario = '$user_name'");
  while($user = mysqli_fetch_assoc($datos)){ 
    $user['idusuario'];
    $var_id = $user['idusuario'];
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Education</title>
	<link rel="stylesheet" type="text/css" href="css/style_update.css">
	<link rel="icon" type="img/png" href="img/icon2.png">
	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
</head>
<body>
	<form action="insertEducation.php" method="POST" class="update-Box">
 		<h1>Educations</h1>
 		<br>
 		
 		<label for="">
 			<input class="datos" type="text" name="titulo" placeholder="Nombre del establecimiento o curso...">
 		</label><br>

 		<label for="">
 			<h2>
 			<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de ingreso
 			</h2>
 			<input class="datos"  type="date" name="fechaInicio">
 		</label><br>

 		<label for="">
 			<h2>
 				<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de salida
 			</h2>
 			<input class="datos"  type="date" name="fechaFin">
 		</label><br>

 		<label for="">
 			<h2>Descripción</h2>
 			<textarea class="datos-descripcion"  type="text" name="descripcion" rows="5" cols="10"> 
 			</textarea> 
 		</label><br>

 		<input class="datos"  type="hidden" name="correlativo" >
 		<input type="hidden" name="usuarioEducation" value="<?php echo $var_id; ?>">

 		<input  class="btn_send" type="submit" value="Insert">
</body>
</html>