<!DOCTYPE html>
<html>
<head>
	<title>New Account</title>
	<link rel="stylesheet" type="text/css" href="css/style_newAccount.css">
	<link rel="icon" type="img/png" href="img/icon2.png">
</head>
<body>
	<form action="insertUser.php" method="POST" enctype="multipart/form-data" class="formulario">
		<h1>New Account</h1><br>
		<input class="datos"type="text" name="nombre" placeholder="Ingrese nombre...">
		<input class="datos"type="text" name="apellido" placeholder="Ingrese apellido...">
		<input class="datos"type="text" name="profesion" placeholder="Ingrese profesion...">
		<input class="datos" type="text" name="direccion" placeholder="Ingrese direccion...">
		<input class="datos"type="email" name="email" placeholder="Ingrese email...">
		<input class="datos"type="number" name="telefono" placeholder="Ingrese telefono">
		<input class="datos"type="text" name="usuario" placeholder="Ingrese nombre de usuario...">
		<input class="datos"type="password" name="contra" placeholder="Ingrese contraseña">
		<input class="datos"type="hidden" name="color" value="0">
    	<input class="datos"type="hidden" name="fondo" value="0"><br>
    	<label for="">Ingrese foto de perfil
    		<input type="file" id="archivo[]" name="archivo[]" multiple="">
    	</label>
    	<input class="btn_send" type="submit" value="Create">
	</form>
</body>
</html>