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
    $user['Nombre'];
    $var_nombre = $user['Nombre'];
    $user['Apellido'];
    $var_apellido = $user['Apellido'];
    $user['profesion'];
    $var_profesion = $user['profesion'];
    $user['fotoperfil'];
    $var_foto = $user['fotoperfil'];
    }
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Insert Jobs</title>
 	<link rel="stylesheet" type="text/css" href="css/style_update.css">
 	<link rel="icon" type="img/png" href="img/icon2.png">
 	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
 </head>
 <body>
 	<form action="insertJob.php" method="POST" class="update-Box" action="insertJob.php">
 		<h1>Work Experiences</h1>
 		<br>
 		
 		<label for="">
 			<input  class="datos" type="text" name="titulo" placeholder="Nombre de la empresa..." ">
 		</label><br>

 		<label for="">
 			<h2>
 			<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de ingreso
 			</h2>
 			<input class="datos" type="date" name="fechaInicio">
 		</label><br>

 		<label for="">
 			<h2>
 				<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de salida
 			</h2>
 			<input class="datos" type="date" name="fechaFin">
 		</label><br>

 		<label for="">
 			<h2>Descripción</h2>
 			<input class="datos-descripcion" type="text" name="descripcion"> 
 		</label><br>

 		<input type="hidden" name="correlativo">
 		<input type="hidden" name="usuarioTrabajo" value="<?php echo $var_id; ?>">

 		<input class="btn_send" type="submit" value="Insert">
 	
 	</form>
 
 </body>
 </html>