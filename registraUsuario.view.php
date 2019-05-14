<?php 
	require 'registroUsuario.php';
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error{color:red;}
	</style>
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

		<section >
			<div class="color1 col-md-3">
					<center><a href="Index.php">Inicio</a></center>
				</div>

				<div class="color1 col-md-3">
					<center><a href="">Catalago</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="contacto.view.php">Contactar</a></center>
				</div>
				
				<div class="color1 col-md-3">
					<center><a href="Iniciasecion.view.php">Inicio seción</a></center>
			</div>
		</section>
	</header>
	
	<div class="wrap">
		</br>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> "method="post">

				<input type= "Text" class="form-control" placeholder="Nombre/s" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo($nombre) ?>">
			</br>

				<input type= "Text" class="form-control" placeholder="Apellido/s" name="apellido" value="<?php if(!$enviado && isset($apellido)) echo($apellido) ?>">
			</br>

				<input type= "email" class="form-control" placeholder="Correo Electronico" name="correo" value="<?php if(!$enviado && isset($correo)) echo($correo) ?>">
			</br>

				<input type= "Text" class="form-control" placeholder="Usuario" name="usuario" value="<?php if(!$enviado && isset($usuario)) echo($usuario) ?>">
			</br>

				<input type= "Text" class="form-control" placeholder="RFC" name="rfc" value="<?php if(!$enviado && isset($rfc)) echo($rfc) ?>">
			</br>

				<input type= "Text" class="form-control" placeholder="Empresa" name="empresa" value="<?php if(!$enviado && isset($empresa)) echo($empresa) ?>">
			</br>

				<input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
			</br>
			
			<?php if (!empty($errores)): ?>
				<div class="alert error"> 
					<?php echo $errores; ?>
				</div>
			<?php elseif ($enviado == true): ?>
				<div class="alert success">
					<p>Se ha registrado correcta mente</p>	
				</div>
			<?php endif ?>

			<div class="col-md-10">
				¿Ya tienes una cuenta?<br/><a href="Iniciasecion.view.php" target="_self">Inicia sesion</a>
			</div>

			<div class=" col-md-2">
				<input type="submit" name="registrado" id="registrado" class="btn color1" value="Registrarse">
			</div>

		</form>	
	</div>

	<script src=" js/jQuery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>