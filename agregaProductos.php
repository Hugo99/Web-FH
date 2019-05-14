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

$errores = '';
$enviado = ''; 


if(isset($_POST['agregar'])){
	$codigo = strtolower($_POST['codigo']);
	$nombre = strtolower($_POST['nombrep']);
	$cantidad = strtolower($_POST['cantidadp']);
	$precio = strtolower($_POST['preciop']);
	$marca = strtolower($_POST['marcap']);

	if(!empty($codigo)){
		$codigo = trim($codigo);
		$codigo = filter_var($codigo,FILTER_SANITIZE_STRING);

		$statement = $conexion->prepare('SELECT * FROM Productos WHERE codigop = :codigo LIMIT 1');
		$statement->execute(array(':codigo'=>$codigo));
		$resultado = $statement->fetch(); 

		if ($resultado != false) {
			$errores .='El codigo ya es registrado<br/>' ;
			$codigo = '' ;
		}

	}else{
		$errores .= 'Por favor ingresa un codigo <br/>' ; 
	}

	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre<br/>' ; 
	}

	if(!empty($cantidad)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre<br/>' ; 
	}

	if(!empty($precio)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre<br/>' ; 
	}

	if(!empty($marca)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre<br/>' ; 
	}


	if (!empty($codigo) && !empty($nombre) && !empty($cantidad) && !empty($precio) && !empty($marca)) {
		$enviado = true; 
		
		$sql = "INSERT INTO Productos(ID,codigo,nombreP,cantidad,precio,marca) VALUES(null,'$codigo', '$nombre', '$cantidad', '$precio', '$marca')";

		$registra = $conexion->prepare($sql);

		if($registra->execute()){
			$enviado = true;
		}else{
			$errores .='No se pudo registar el producto, intente mas tarde';
		}

		/*$statement = $conexion->prepare('INSERT INTO Usuarios VALUES(null, '$nombre', '$apellido', '$correo', '$usuario', '$rfc', '$empresa', '$contrasena')');
		$statement->execute();

		$resultado = $statement->fetchAll();
		foreach ($resultado as $usuario) {
			$enviado = true;
		}else $errores .='No se pudo reg';*/

	}
}

?>