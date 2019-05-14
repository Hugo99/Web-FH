<?php 
	require 'agregaProductos.php';
	
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
	</header>
</head>
<body>	
	<body>
	<br/>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-3 col-md-3">
	            <div class="panel-group" id="accordion">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-tags">
	                            </span> Productos</a>
	                        </h4>
	                    </div>
	                    <div id="collapseOne" class="panel-collapse collapse in">
	                        <div class="panel-body">
	                            <table class="table">
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="modificarProductos.view.php">Editar</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-plus text-primary"></span><a href="agregaProductos.view.php">Agregar</a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <span class="glyphicon glyphicon-file text-primary"></span><a href="productos.view.php">Ver productos</a>
	                                    </td>
	                                </tr>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="verMensaje.view.php"><span class="glyphicon glyphicon-inbox">
	                            </span> Mensajes</a>
	                        </h4>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="clientes.view.php"><span class="glyphicon glyphicon-user">
	                            </span> Clientes</a>
	                        </h4>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
	                            </span> Pedidos</a>
	                        </h4>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-remove">
	                            </span> Salir</a>
	                        </h4>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-9 col-md-9">
	            <div class="well">
	                <div class="">
						<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> "method="post">
								<input type= "Text" class="form-control" placeholder="Codigo" name="codigo" value="<?php if(!$enviado && isset($codigo)) echo($codigo) ?>">
							</br>

								<input type= "Text" class="form-control" placeholder="Nombre del producto" name="nombrep" value="<?php if(!$enviado && isset($nombre)) echo($nombre) ?>">
							</br>

								<input type= "Text" class="form-control" placeholder="Cantidad" name="cantidadp" value="<?php if(!$enviado && isset($cantida)) echo($cantida) ?>">
							</br>

								<input type= "Text" class="form-control" placeholder="Precio" name="preciop" value="<?php if(!$enviado && isset($precio)) echo($precio) ?>">
							</br>

								<input type= "Text" class="form-control" placeholder="Marca" name="marcap" value="<?php if(!$enviado && isset($marca)) echo($marca) ?>">
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

							<div class=" col-md-2">
								<input type="submit" name="agregar" id="agregar" class="btn color1" value="Agregar">
							</div>
						</form>	
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>