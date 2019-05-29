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
	<div class="contenedor">
		<br>
		<div class="col-md-12">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<!-- Indicadores -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0"	class="active" ></li>
					<li data-target="#carousel-1" data-slide-to="1"	></li>
					<li data-target="#carousel-1" data-slide-to="2"	></li>
				</ol>
				<!-- contenedor de los slide -->
				
				<div class="carousel-inner" role="listbox">

					<!-- #1 -->
					<div class="item  active">
						<a href="Catalagos/promociones.pdf" target="_blank">
							<img src="MAYO2019P.jpg" class="img-responsive" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>

					<!-- #2 -->
					<div class="item ">
						<a href="https://www.truper.com/catvigente/" target="_blank">
							<img src="C2019.png" class="img-responsive" alt="">
						</a>
						<div class="carousel-caption">
							 <h3></h3>
							<p></p> 
						</div>
					</div>

					<!-- #3 -->
					<div class="item">
						<img src="Sucursales.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
			   				<h3></h3>
							<p></p>
						</div>
					</div>
				</div>
				<!-- Controles -->
				<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
	</div>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
