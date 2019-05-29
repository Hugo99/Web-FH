<?php 
	require 'Iniciasecion.php';

	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos2.css">
	<link rel="stylesheet" href="estilos3.css">
</head>	

<body>
	<header>
		<div class="container">
			<center>
				<h1>
					Ferreteria El Remache
					<br>
					Comercializadora HAS
					</br>
				</h1>
			</center>
		</div>

		<section>
			<div class="color1 col-md-3">
					<center><a href="Index.php">Inicio</a></center>
				</div>

				<div class="color1 col-md-3">
					<center><a href="catalago.php">Catalago</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="contacto.view.php">Contactar</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="Iniciasecion.view.php">Inicio sesión</a></center>
			</div>
		</section>
	</header>
	

	<div class="wrap">
		</br>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELf']); ?> " method="post">
			<input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(!$enviado && isset($nombre)) echo($nombre) ?>">
			</br>

			<input type="password" id="contrasena" class="form-control" name="contrasena" placeholder="Contraseña" value="">
			
			<?php if (!empty($errores)): ?>
				<div class="alert error"> 
					<?php echo $errores; ?>
				</div>
			<?php endif ?>
			
			<div class="col-md-10">
				¿No estas registrado?<br/><a href="registraUsuario.view.php" target="_self">Registrate aqui</a>
			</div>

			<div class=" col-md-2">
				<input type="submit" id="envio" name="submit" class="btn color1" value="Inicia Secion">
			</div>

		</form>
	</div>

</body>
</html>