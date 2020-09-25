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
 	<title>Insert Skills</title>
 	<link rel="stylesheet" type="text/css" href="css/style_update.css">
 	<link rel="icon" type="img/png" href="img/icon2.png">
 	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
 </head>
 <body>
 	<form action="insertSkill.php" method="POST" class="update-Box">
 		<h1>Technical Skills</h1>
 		<br>
 		
 		<label for="">
 			<input  class ="datos" type="text" name="titulo" placeholder="Technical name">
 		</label><br>

 		<label for="">
 			<input class="datos" type="text" name="porcentaje" placeholder="Percent %">
 		</label><br>

 		<input type="hidden" name="correlativo">
 		<input type="hidden" name="usuarioSkills" value="<?php echo $var_id; ?>">

 		<input class="btn_send" type="submit" value="Insert">
 	</form>
 
 </body>
 </html>