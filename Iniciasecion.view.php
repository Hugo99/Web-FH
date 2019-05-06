<?php 
	require 'Iniciasecion.php';
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
					<center><a href="localhost:8888/W-FR_CHAS/Index.php">Inicio</a></center>
				</div>

				<div class="color1 col-md-3">
					<center><a href="">Catalago</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="localhost:8888/W-FR_CHAS/Contacto/contacto.view.php">Contactar</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="localhost:8888/W-FR_CHAS/InicioSecion/inicioSesion.view.php">Inicio seción</a></center>
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