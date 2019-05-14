<?php 
session_start();

$usuarioDB = "hugo";
$contrasenaDB = "";
$servidor = "localhost";
$basededatos = "WebFH";

$errores = '' ; 
$enviado = '' ; 


if(isset($_POST['submit'])){
	$usuario = strtolower($_POST['usuario']);
	$contrasena = $_POST['contrasena'];
	$contrasena = hash('sha512', $contrasena);

	try {
		$conexion = new PDO('mysql:host=localhost; dbname=WebFH;',$usuarioDB, $contrasenaDB);
	} catch (PDOException $e) {
		die('Error: '.$e->getMessage());
	}

	$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE usuario = :usuario AND contrasena = :contrasena');
	$statement->execute(array(':usuario' => $usuario, ':contrasena' => $contrasena));

	$resultado = $statement->fetch();

	if($resultado != false){

		$usuario = strtolower($_POST['usuario']);
		$contrasena = $_POST['contrasena'];
		$contrasena = hash('sha512', $contrasena);

		try {
			$conexion = new PDO('mysql:host=localhost; dbname=WebFH;',$usuarioDB, $contrasenaDB);
		} catch (PDOException $e) {
			die('Error: '.$e->getMessage());
		}

		$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE usuario = :usuario AND contrasena = :contrasena AND permisos = :permisos');
		$statement->execute(array(':usuario' => $usuario, ':contrasena' => $contrasena, ':permisos' => 1));
		$resultado = $statement->fetch();

		if($resultado != false){
			header('Location: Indexhost.view.php');
			$_SESSION['usuarios'] = $usuario ;
			//$_SESSION['nombreS'] = $usuario;  
		}else {
			header('Location: IndexUsuario.view.php');
			$_SESSION['usuarios'] = $usuario ;
			//$_SESSION['nombreS'] = $usuario;  
		}

	}else {
		$errores .= 'La contraseña o el usuario es incorrecto <br/> ';
	}
}
?>