<?php session_start();
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