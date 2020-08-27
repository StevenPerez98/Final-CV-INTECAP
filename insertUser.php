<?php 
  include 'php/conexion.php';
  $nombre = $_POST ['nombre'];
  $apellido = $_POST ['apellido'];
  $profesion = $_POST ['profesion'];
  $direccion = $_POST ['direccion'];
  $email = $_POST ['email'];
  $telefono = $_POST ['telefono'];
  $usuario = $_POST ['usuario'];
  $contra = $_POST ['contra'];
  $color = $_POST['color'];
  $fondo = $_POST['fondo'];
  
  foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){
    if($_FILES["archivo"]["name"][$key]){
      $filename = $_FILES["archivo"]["name"][$key];
      $source = $_FILES["archivo"]["tmp_name"][$key];
      //esta variable cambia el nombre de la carpeta que crea en la pc
      $directorio = 'fotos';
      //verifica si el directorio existe de lo contrario con die muerte el proceso
      if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die ("No se puede crear el directorio de extraccion");
      }
      $dir = opendir($directorio);
      $target_path = $directorio.'/'.$filename;

      if(move_uploaded_file($source, $target_path)){
        $instrucUsuario = "INSERT INTO usuario VALUES(null, '$nombre', '$apellido', '$profesion', '$direccion', '$email', '$telefono', '$target_path', '$usuario', '$contra', '$color', '$fondo')";
        
        mysqli_query($conexion_usuario, $instrucUsuario);
        header('location: login.php');
      }
      else{
        header('location: notificacion.php?notificacion=2');
      }
      closedir($dir);
    }
  }
?>