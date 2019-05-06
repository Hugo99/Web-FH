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


if(isset($_POST['registrado'])){
	$nombre = strtolower($_POST['nombre']);
	$apellido = strtolower($_POST['apellido']);
	$correo = strtolower($_POST['correo']);
	$usuario = strtolower($_POST['usuario']);
	$rfc = strtolower($_POST['rfc']);
	$empresa = strtolower($_POST['empresa']);
	$contrasena = $_POST['contrasena'];

	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre<br/>' ; 
	}

	if(!empty($apellido)){
		$apellido = trim($apellido);
		$apellido = filter_var($apellido,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un apellido<br/>' ; 
	}


	if(!empty($correo)){
		$correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
		if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido<br/>' ; 
		}

		$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE correoElect = :correoElect LIMIT 1');
		$statement->execute(array(':correoElect'=>$correo));
		$resultado = $statement->fetch(); 

		if ($resultado != false) {
			$errores .='El Correo ya esta registrado <br/>' ;
			$correo = '';
		}


	}else{
		$errores .= 'Por favor ingresa un correo<br/>' ; 
	}

	if(!empty($usuario)){
		$usuario = trim($usuario);
		$usuario = filter_var($usuario,FILTER_SANITIZE_STRING);

		$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario'=>$usuario));
		$resultado = $statement->fetch(); 

		if ($resultado != false) {
			$errores .='El usuario ya existe <br/>' ;
			$usuario = '' ;
		}

	}else{
		$errores .= 'Por favor ingresa un usuario <br/>' ; 
	}

	if(!empty($rfc)){

		if (strlen($rfc) > 13) {
			$errores .= 'Ingrese un RFC valido <br/>';
			$rfc = '';
		}
		$rfc = trim($rfc);
		$rfc = filter_var($rfc,FILTER_SANITIZE_STRING);

		$statement = $conexion->prepare('SELECT * FROM Usuarios WHERE rfc = :rfc LIMIT 1');
		$statement->execute(array(':rfc'=>$rfc));
		$resultado = $statement->fetch(); 

		if ($resultado != false) {
			$errores .='El RFC ya esta registrado <br/>' ;
			$rfc = '' ;
		}

	}else{
		$errores .= 'Por favor ingresa un RFC <br/>' ; 
	}

	if(!empty($empresa)){
		$empresa = trim($empresa);
		$empresa = filter_var($empresa,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa una empresa <br/>' ; 
	}

	if(!empty($contrasena)){
		//$contrasena = filter_var($usuario,FILTER_SANITIZE_STRING);
		$contrasena = hash('sha512', $contrasena);

	}else{
		$errores .= 'Por favor ingresa una contraseña <br/>' ; 
	}

	if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($usuario) && !empty($rfc) && !empty($empresa) && !empty($contrasena)) {
		
		$sql = "INSERT INTO Usuarios(ID, nombre,apellido,correoElect,usuario,rfc,empresa,contrasena,permisos) VALUES(null,'$nombre', '$apellido', '$correo', '$usuario', '$rfc', '$empresa', '$contrasena', 0)";

		print_r($sql);

		$registra = $conexion->prepare($sql);

		if($registra->execute()){
			$enviado = true;
		}else{
			$errores .='No se pudo registar, intente mas tarde';
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