<?php session_start();

if ($_SESSION) {	
	//echo $_SESSION['usuarios'];
}else header('Location: Iniciasecion.view.php');

$usuarioDB = "hugo";
$contrasenaDB = "";
$servidor = "localhost";
$basededatos = "WebFH";

try {
	$conexion = new PDO('mysql:host=localhost; dbname=WebFH;',$usuarioDB, $contrasenaDB);
}catch (PDOException $e) {
	die('Error: '.$e->getMessage());
}


 ?>