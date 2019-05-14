<?php 
	require 'contacto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos3.css">
	<link rel="stylesheet" href="estilos2.css">

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
</head>	

<body>

	<div class="wrap">
		</br>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELf']); ?> " method="post">

			<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo($nombre) ?>">
			</br>

			<input type="text" id="correo" class="form-control" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo($correo) ?>">
			</br>

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo($mensaje) ?></textarea> 
			</br>

			<?php if (!empty($errores)): ?>
				<div class="alert error"> 
					<?php echo $errores; ?>
				</div>
			<?php elseif ($enviado == true): ?>
				<div class="alert success">
					<p>Enviado correctamente</p>	
				</div>
			<?php endif ?>

			<input type="submit" id="envio" name="submit" class="btn color1" value="Enviar Correo">
		</form>
	</div>

</body>
</html>