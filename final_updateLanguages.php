
<?php 
$lenguage = $_GET['lenguage'];
$titulo = $_GET['titulo'];
$porcentaje = $_GET['porcentaje'];



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Languages</title>
 	<link rel="stylesheet" type="text/css" href="css/style_update.css">
 	<link rel="icon" type="img/png" href="img/icon2.png">
 	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
 </head>
 <body>
 	<form action="updateLanguages.php" method="POST" class="update-Box">
 		<h1>Languages</h1>
 		<br>
 		
 		<label for="">
 			<h2>Laguage</h2>
 			<input class="datos" type="text" name="titulo" value="<?php echo $titulo; ?>">
 		</label><br>

 		<label for="">
 			<h2>Percent %</h2>
 			<input class="datos" type="text" name="porcentaje" value="<?php echo $porcentaje ; ?>">
 		</label><br>

 		<input type="hidden" name="correlativo" value="<?php echo $lenguage; ?>">

 		<input class="btn_send" type="submit" value="Update">
 	</form>
 
 </body>
 </html>