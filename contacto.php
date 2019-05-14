<?php 

$usuario = "hugo";
$contrasena = "";
$servidor = "localhost";
$basededatos = "WebFH";

try {
		$conexion = new PDO("mysql:host=$servidor; dbname=$basededatos;",$usuario, $contrasena); /* almacena conexión con la base de datos */
	} catch (PDOException $e) {
		die('Error: '.$e->getMessage());
	}


$errores = '' ; 
$enviado = '' ; 

$nombre = '';
$correo = '';
$mensaje = '';


if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

	}else{
		$errores .= 'Por favor ingresa un nombre <br/>' ; 
	}

	if(!empty($correo)){
		$correo = filter_var($correo,FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingresa un correo valido <br/>' ; 
		}

	}else{
		$errores .= 'Por favor ingresa un correo <br/>' ; 
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje) ;
		$mensaje = trim($mensaje); 
		$mensaje = stripcslashes($mensaje) ;
	}else {
		$errores .= 'Por favor ingresa un mensaje';
	}

	if(!empty($nombre) && !empty($correo) && !empty($mensaje)){


		/*$enviado_a= 'eguinohugo@gmail.com' ;
		$asunto = 'Correo pagina';
		$mensaje_c = 'De: '. $nombre ."\n";
		$mensaje_c .= 'Correo:' . $correo . "\n";
		$mensaje_c .= "Mensaje: " . $mensaje;

		mail($enviado_a, $asunto, $mensaje);
		$enviado = true;*/

		//print_r($sql);

		$sql = "INSERT INTO Mensaje(ID, nombre, correoElect, Mensaje) VALUES(null, '$nombre', '$correo', '$mensaje')";

		$registra = $conexion->prepare($sql);

		if($registra->execute()){
			$enviado = true;
		}else{
			$errores .='No se pudo registar, intente mas tarde';
		}

	}
}

?>