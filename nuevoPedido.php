<?php 
session_start();
$cliente =$_SESSION['usuarios'];

if ($_SESSION) {	
	//echo $_SESSION['usuarios'];
}else header('Location: Iniciasecion.view.php');

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

$creado = 0;
if($creado == '0' ) {
	$resulta = $conexion->query("SELECT * from Pedido");
	foreach ($resulta as $Ped){
		if ($Ped['numArt'] == 0 && $Ped['Cliente'] == $_SESSION['usuarios']) {
			$IDpedido = $Ped['ID'];
			$creado = 1;
		}
	}
}

if(isset($_POST['submit'])){
	$Codigo = $_POST['codigo'];
	$Cantidad = $_POST['cantidad'];

	if(!empty($Codigo) && !empty($Cantidad)){

		$sql = "INSERT INTO artPedidos(Codigo, Cantidad, Cliente, numPedido) VALUES ('$Codigo','$Cantidad','$cliente','$IDpedido')"; 
		$registra = $conexion->prepare($sql);
		if($registra->execute()){
			$enviado = true;
		}else{
			$errores .='No se pudo registar, intente mas tarde';
		}

		$sql="UPDATE Pedido set numArt = numArt + '1' WHERE ID = $IDpedido"; 
		$registra = $conexion->prepare($sql);
		if($registra->execute()){
			$enviado = true;
		}else{
			$errores .='No se pudo registar, intente mas tarde';
		}
		

	}else $errores = 'Ingrese el codigo o la cantidad';
}




 ?>