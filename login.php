<?php 
	include 'php/conexion.php';

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		session_start();
		$usuario = $_POST['user'];
		$contraseña = $_POST['password'];

		if($usuario != "" && $contraseña!= ""){
			$instruc1 = "SELECT * FROM usuario WHERE usuario = '$usuario' and contra = '$contraseña'";
			$query = mysqli_query($conexion_usuario, $instruc1);

			while($r = mysqli_fetch_assoc($query)){
				//$_SESSION es una super variable que se activa con el session_start(); y loggedin es booleano
				$_SESSION['loggedin'] = true;
				$_SESSION['usuario'] = $usuario;
				//INICIO DE SESION CON NOBRE DEL USUARIO, 
       			// $_SESSION['contra'] = $contra;
       			header('location: main.php');
			}
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script src="https://kit.fontawesome.com/be22cdfc56.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>
<body>
	<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" class="login-box">
		<h1>Login</h1>
		<div class="login">
			<i class="fas fa-user"></i> 
			<input type="text" name="user" placeholder="User name...">
		</div>
		<div class="login">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password...">
		</div>
		<input type="submit" name="" class="btn" value="Sing in">

		<a href="newAccount.php" class="btn1">Create an Account</a>
	</form>
</body>
</html>