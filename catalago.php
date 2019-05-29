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

</head>	

<body>

	<section class="row">
		<div class="col-md-4">
			<br/>
	  		<center><a href="https://www.truper.com/catvigente/" target="_blank"><img src="Catalagos/turper.gif" alt="Catalago Truper" style="width:320px;height:400px;border:0;"></a></center>
		</div>

		<div class="col-md-4">
			<br/>
			<br/>
			<br/>
			<br/>
			<a href="Catalagos/SikaGuia.pdf" target="_blank"><img src="Catalagos/sika.png" alt="Sika" style="width:400px;height:250px;border:0;"></a>
		</div>

		<div class="col-md-4">
			<br/>
			<br/>
			<br/>
			<br/>
			<a href="Catalagos/catalogo-coflex.pdf" target="_blank"><img src="Catalagos/coflex.png" alt="Coflex" style="width:400px;height:250px;border:0;"></a>
		</div>
	</section>	

	<section class="container">
		<div class="col-md-6">
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<center><a href="Catalagos/Impac3.pdf" target="_blank"><img src="Catalagos/imper3.png" alt="Impac3" style="width:225px;height:300px;border:0;"></a></center>
		</div>

		<div class="col-md-6">
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<center><a href="Catalagos/Impac5.pdf" target="_blank"><img src="Catalagos/imper5.png" alt="Impac5" style="width:225px;height:300px;border:0;"></a></center>
		</div>
	</section>

	<div>
		<center>
			<h1>Los productos están sujetos a disponibilidad, si el producto que desea no es encuentra <a href="contacto.view.php">contáctenos</a> </h1>
		</center>
	</div>
</body>
</html
