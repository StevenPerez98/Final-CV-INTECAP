<?php 
$educacion = $_GET['educacion'];
$titulo = $_GET['titulo'];
$fechaInicio = $_GET['fechaIngreso'];
$fechaFin = $_GET['fechaFinal'];
$descripcion = $_GET['descripcion'];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Educations</title>
 	<link rel="stylesheet" type="text/css" href="css/style_update.css">
 	<link rel="icon" type="img/png" href="img/icon2.png">
 	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
 </head>
 <body>
 	<form action="updateEducations.php" method="POST" class="update-Box">
 		<h1>Educations</h1>
 		<br>
 		
 		<label for="">
 			<h2>Nombre de la establecimiento o curso</h2>
 			<input class="datos" type="text" name="titulo" value="<?php echo $titulo; ?>">
 		</label><br>

 		<label for="">
 			<h2>
 			<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de ingreso
 			</h2>
 			<input class="datos"  type="date" name="fechaInicio" value="<?php echo $fechaInicio ; ?>">
 		</label><br>

 		<label for="">
 			<h2>
 				<i class="fas fa-calendar-alt"></i>&nbsp;Fecha de salida
 			</h2>
 			<input class="datos"  type="date" name="fechaFin" value="<?php echo $fechaFin ; ?>">
 		</label><br>

 		<label for="">
 			<h2>Descripción</h2>
 			<input class="datos-descripcion"  type="text" name="descripcion" value="<?php echo $descripcion; ?>"> 
 		</label><br>

 		<input class="datos"  type="hidden" name="correlativo" value="<?php echo $educacion; ?>">

 		<input  class="btn_send" type="submit" value="Update">
 	</form>
 
 </body>
 </html>