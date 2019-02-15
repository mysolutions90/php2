<?php session_start();

if (isset($_SESSION['usuario'])){
header('Location: principal.php');
}


if ($_SESSION['intentos'] > 2 )
{ 
// echo 'limite de intentos superado.' .$_SESSION['intentos'];
 $mensaje = 'limite de intentos superado.' .$_SESSION['intentos'];
            echo "<script type='text/javascript'>alert('$mensaje');</script>";

// session_start();
session_unset();
session_destroy();
// header('Location: login.php');
}
else{


if ($_SERVER['REQUEST_METHOD']=='POST') {
	$usuario = $_POST ['txtnombre'];
	$password = $_POST['txtcontrasenia'];
	require('conexion.php'); 
	$consulta = $conexion -> prepare('SELECT * FROM usuario where usu_usuario=:txtnombre and usu_contrasenia=:txtcontrasenia');
	$consulta -> execute(array(':txtnombre'=> $usuario,':txtcontrasenia'=>$password));

	$resultado = $consulta ->fetch();
	if ($resultado!==false) {
		$_SESSION['usuario'] = $usuario;
		
		 header('Location: ListarUsuario_1.php');
	}else{
		
		 header('Location: index.php');
		 $mensaje = "Usuario o Contraseña incorrecta";
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
	}
}
}


?>