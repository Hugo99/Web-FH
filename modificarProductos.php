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

$codigo = ''; 
$error = '';
$enviado = '';

if (isset($_POST['buscar'])) {

	if (!empty($_POST['codigo'])) {

		$codigo = $_POST['codigo'];
		$enviado = true ;

	}else if(!empty($_POST['codigo'])){
		$error .= 'Ingresa un codigo' ;
	}

}



 ?>