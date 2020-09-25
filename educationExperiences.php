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
	<title>Education</title>
	<link rel="stylesheet" type="text/css" href="css/style_table.css">
	<link rel="icon" type="img/png" href="img/icon2.png">
	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
</head>
<body>
	<section class="main_cv">
		<div class="item header">
			<nav class="headerContainer">
				<ul class="tabs">
					<li class="navs1"><a href="logout.php">Log out</a></li>
					<li class="navs2"><a href="educationExperiences.php">Education</a></li>
					<li class="navs3"><a href="jobExperiences.php">Work Experience</a></li>
					<li class="navs4"><a href="languages.php">Languages</a></li>
					<li class="navs4"><a href="skills.php">Skills</a></li>
				</ul>
			</nav>
		</div>

		<div class="item left">
			<div class="profile">
          		<img src="<?php echo $var_foto ?>" alt="Imagen de usuario">

          		<h2 class="profileName">
          			<?php echo $var_nombre ." ".$var_apellido ;?>
          		</h2>
          	
          		<h3 class="data">
          			<i class="fas fa-briefcase"></i>&nbsp; 
          			<?php echo $var_profesion; ?>
          		</h3>
          	</div>	
        	
        	<div class="insert_data">	
			 	<h3><i class="fas fa-plus"></i>&nbsp;Insert:</h3>
			 	<ul>
					<a class="data" href="final_insertSkill.php"><li>Technical skills</li></a>
					<a class="data" href="final_insertLanguage.php"><li>Languages</li></a>
					<a class="data" href="final_insertJob.php"><li>Work Experiences</li></a>
					<a class="data" href="final_insertEducation.php"><li>Education</li></a>
				</ul>
			</div>
			<p><a class="data"href="CV.php">View Original CV</a></p>
		</div>

		<div class="item contenido">
			<h1>Education</h1>
		 	<table>
		 		<th>Correlativo</th>
		 		<th>Nombre establecimiendo o curso</th>
		 		<th>Fecha de incio</th>
		 		<th>Fecha de cierre</th>
		 		<th>Descripción</th>
		 		<th>Delete</th>
		 		<th>Update</th>

				<?php 
		 			$instruc1 = "SELECT * FROM actividades WHERE tipo = 'e' AND usuario = '$var_id'";
					$query1 = mysqli_query($conexion_usuario,$instruc1);

					while($e = mysqli_fetch_assoc($query1)){
						echo "<tr><td>".$e['correlativo'].
							 "</td><td>".$e['titulo'].
							 "</td><td>".$e['fechaInicio'].
							 "</td><td>".$e['fechaFin'].
							 "</td><td>".$e['descripcion']."</td>

							 <td><a href='deleteEducation.php?educacion=".$e['correlativo']."'><i class='fas fa-trash-alt'></a></td>

							<td><a href='final_updateEducation.php?educacion=".$e['correlativo'].
							"&titulo=".$e['titulo'].
							"&fechaIngreso=".$e['fechaInicio'].
							"&fechaFinal=".$e['fechaFin'].
							"&descripcion=".$e['descripcion']."'><i class='fas fa-edit'></a></td></tr>";

					}

		 		 ?>
		 	</table>
		</div>

		<div class="item footer">
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
		</div>
		
	</section>

	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>



