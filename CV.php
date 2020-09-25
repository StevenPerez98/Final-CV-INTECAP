<?php
	include 'php/conexion.php';
	//Para la seguridad de la pagina para que no cuando no este logeado y tenga la ruta de acceso no pueda ingresar
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
    	$user['fotoperfil'];
    	$var_foto = $user['fotoperfil'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>	Personal CV</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="img/png" href="img/icon2.png">
	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
</head>
<body>
	<section class="main">
		<?php
      		$instrucVar = "SELECT * FROM usuario WHERE usuario = '$user_name'";
		    $queryVar = mysqli_query($conexion_usuario, $instrucVar);
		    $idUser;
		    while($f = mysqli_fetch_assoc($queryVar)){
      ?>
		<div class="left">
			<div class="profile">
				<img src="<?php echo $var_foto ?>" alt="Imagen usuario">
				<h2 class="profileName">
					<?php echo $f['Nombre']." ".$f['Apellido'];?>
				</h2>
			</div>
			<div class="dataContainer">
				<div class="data">
					<h3>
						<i class="fas fa-briefcase"></i>&nbsp; 
						<?php echo $f['profesion']; ?>
					</h3>
				</div>
				<div class="data">
					<h3>
						<i class="fas fa-home"></i>&nbsp; 
						<?php echo $f['direccion']; ?>
					</h3>
				</div>
				<div class="data">
					<h3>
						<i class="fas fa-envelope"></i>&nbsp; 
						<?php echo $f['email'];?>
					</h3>
				</div>
				<?php 
					}
				 ?>
				<hr class="division">

				<div class="techSkills">
					<div class="skillIcon">
						<i class="fas fa-atom"></i>&nbsp;Skills
					</div>
					<?php 
					$instruc1 = "SELECT * FROM actividades WHERE tipo = 's' AND usuario = '$var_id'";
					$query1 = mysqli_query($conexion_usuario,$instruc1);
					$idUser;

					while($f = mysqli_fetch_assoc($query1)){
					
					?>
				
					<div class="htmlSkill">
						<p><?php  echo $f['titulo']; ?></p>
						<div class="skills">
							<div class="htmlcolorBar">
								<p id="porcent" class="porcentHTML"><?php echo $f['porcentaje']; ?>%</p>
							</div>
						</div>
					</div>
					<?php 
						}/*CERRAMOS EL 2do WHILE QUE SE ABRIO (actividades)*/
		 			?>
					<!--<div class="cssSkill">
						<p>CSS</p>
						<div class="skills">
							<div class="csscolorBar">
								<p class="porcentCSS">%</p>
							</div>
						</div>
					</div>
					<div class="jsSkill">
						<p>Javascript</p>
						<div class="skills">
							<div class="jscolorBar">
								<p class="porcentJS">%</p>
							</div>
						</div>
					</div> 
					<div class="phpSkill">
						<p>php</p>
						<div class="skills">
							<div class="phpcolorBar">
								<p class="porcentPHP">%</p>
							</div>
						</div>
					</div>-->
				</div>

				<div class="languages">
					<div class="languagesIcon">
						<i class="fas fa-globe-americas"></i>&nbsp;Languages
					</div>
					<?php 
					$instruc1 = "SELECT * FROM actividades WHERE tipo = 'l' AND usuario = '$var_id'";
					$query1 = mysqli_query($conexion_usuario,$instruc1);
					$idUser;
					while($f = mysqli_fetch_assoc($query1)){
					
					?>
					<div class="spanish">
						<p><?php echo $f['titulo']; ?></p>
						<div class="skills">
							<div class="spanishcolorBar">
								<p class="porcentSpanish"><?php echo $f['porcentaje']; ?>%</p>
							</div>
						</div>
					</div>
					<?php 
						}
					 ?>
					<!--<div class="english">
						<p>Ingles</p>
						<div class="skills">
							<div class="englishcolorBar">
								<p class="porcentEnglish">50%</p>
							</div>
						</div>
					</div>-->
				</div>
				
			</div>
		</div>
		<div class="right1">
			<div class="experienceContainer">
				<div class="workExperience">
					<i class="fas fa-suitcase"></i>&nbsp;Work Experience
				</div>
				<?php 
					$instruc1 = "SELECT * FROM actividades WHERE tipo = 't' AND usuario = '$var_id'";
					$query1 = mysqli_query($conexion_usuario,$instruc1);
					$idUser;
					while($f = mysqli_fetch_assoc($query1)){
					
					
				?>
					<div class="experience1">
						<h3><?php echo $f['titulo']; ?></h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;<?php echo $f['fechaInicio']; ?> to 
						<span><?php echo $f['fechaFin']; ?></span>
						<p><?php echo $f['descripcion']; ?></p>
					</div>

				<?php 
					}
				 ?>
					<!--<div class="experience2">
						<h3>Front End Developer 2 <i class="fas fa-pen"></i> </h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;May 2020 - <span>CURRENT</span>
						<p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
					</div>
					<div class="experience3">
						<h3>Front End Developer 3 <i class="fas fa-pen"></i> </h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;May 2020 - <span>CURRENT</span>
						<p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
					</div>-->
			</div>
		</div>
		<div class="right2">
			<div class="educationContainer">
				<div class="Education">
					<i class="fas fa-user-graduate"></i>&nbsp;Education
				</div>

				<?php 
					$instruc1 = "SELECT * FROM actividades WHERE tipo = 'e' AND usuario = '$var_id'";
					$query1 = mysqli_query($conexion_usuario,$instruc1);
					$idUser;
					while($f = mysqli_fetch_assoc($query1)){
					
					
				?>
					<div class="education1">
						<h3><?php echo $f['titulo'] ?></h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;<?php echo $f['fechaInicio']; ?> to
						<span><?php  echo $f['fechaFin'];?></span>
						<p><?php echo $f['descripcion']; ?></p> 
					</div>
				<?php 
					}
				 ?>
					<!--<hr class="division">
					<div class="education2">
						<h3>Intecap <i class="fas fa-pen"></i> </h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;Forver
						<p>Web Development! All I need to know in one place</p> 
					</div>
					<hr class="division">
					<div class="education3">
						<h3>Intecap <i class="fas fa-pen"></i> </h3>
						<i class="fas fa-calendar-alt"></i>&nbsp;Forver
						<p>Web Development! All I need to know in one place</p> 
					</div>-->
			</div>
		</div>
		
	</section>

	<section class="footer">
		<div class="footerContainer">
			<p><br>Find me on social media</p>
			<div class="socialMedia">
				<a target = "_blank" href="https://www.facebook.com/andysteven.perezgonzalez/">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a target = "_blank" href="https://www.instagram.com/pandy98_/">
					<i class="fab fa-instagram"></i>	
				</a>	
			</div>
			<p>Power by <a target = "_blank" href="https://intecap.edu.gt/" target="_blank">Intecap</a></p>
		</div>	
	</section>


<script type="text/javascript" src="js/main.js"></script>
</body>
</html>