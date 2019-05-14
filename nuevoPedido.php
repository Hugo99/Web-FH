<?php 
session_start();

if($_SESSION){
	$usuarioDB = "hugo";
	$contrasenaDB = "";
	$servidor = "localhost";
	$basededatos = "WebFH";


	try {
		$conexion = new PDO('mysql:host=localhost; dbname=WebFH;',$usuarioDB, $contrasenaDB);
	}catch(PDOException $e){
		die('Error: '.$e->getMessage());
	}

	$statement = $conexion->prepare('DELETE FROM Pedido WHERE numArt = :numArt LIMIT 1' );
	$statement->execute(array(':numArt'=>0));
	$resultado = $statement->fetch();
	//DELETE FROM Pedido WHERE numArt = 0 LIMIT 1 ; 
	//'DELETE FROM Pedido WHERE numArt = 0 LIMIT 1' ;

//-*-*-*-*-*Nuevo Pedido-*-*-*-*-*
	$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE usuario = :usuarioS LIMIT 1');
	$statement->execute(array(':usuarioS'=>$_SESSION['usuarios']));
	$resultado = $statement->fetch();

	$Cl = $_SESSION['usuarios'] ;

	$sql = "INSERT INTO Pedido(ID,Cliente,Fecha,numArt) VALUES(null,'$Cl',null,0)";

	$registra = $conexion->prepare($sql);

	if($registra->execute()){
		$enviado = true;
	}else{
		$errores .='No se pudo crear el pedido, intente mas tarde';
	}


	if ($_POST['envioC']) {
		$codigo = strtolower($_POST['codigo']);

		if(!empty($codigo)){
			$usuario = trim($usuario);
			$usuario = filter_var($usuario,FILTER_SANITIZE_STRING);

			$statement = $conexion->prepare('SELECT * FROM Productos WHERE codigop = :codigo LIMIT 1');
			$statement->execute(array(':codigo'=>$codigo));
			$resultado = $statement->fetch(); 


			if ($resultado != false) {
				
			$statement = $conexion->prepare('SELECT * FROM Productos WHERE codigop = :codigo LIMIT 1');
			$statement->execute(array(':codigo'=>$codigo));
			$resultado = $statement->fetch(); 			
				
			}

		}else{
			$errores .= "Ingrese un codigo <br/>" ; 
		}

	}

}


 ?>