<?php 
	require 'nuevoPedido.php';
	session_start();
	$sql = "INSERT INTO Pedido(ID,Cliente,Fecha,numArt) VALUES(null,'$Cl',null,0)";

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
	</header>
</head>	

<body>
	<br/>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-3 col-md-3">
	            <div class="panel-group" id="accordion">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="pedidosC.view.php"><span class="glyphicon glyphicon-folder-open">
	                            </span> Pedidos</a>
	                        </h4>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="nuevoPedido.view.php"><span class="glyphicon glyphicon-plus">
	                            </span>Nuevo pedido</a>
	                        </h4>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">
	                            <a data-toggle="collapse" data-parent="#accordion" href="cerrarSecion.php"><span class="glyphicon glyphicon-remove">
	                            </span> Salir</a>
	                        </h4>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="col-sm-9 col-md-9">
	            <div class="well">
	            	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> "method="post">
		                <input type="text" id="codigo" class="form-control" name="codigo" placeholder="Codigo" value="<?php if(isset($errores)) echo($codigo) ?>">

		                <input type="text" id="cantidad" class="form-control" name="cantidad" placeholder="Cantidad" value="">

		                <?php if (!empty($errores)){ ?>
							<div class="alert error"> 
								<?php echo $errores; ?>
							</div>
						<?php }?>
						
		                <input type="submit" id="envioC" name="submit" class="btn color1" value="Agregar">
		            </form>
	            </div>

	            <div class="well">
	            	<table class="table">
					  <thead class="thead color3">
					    <tr>
					      <th scope="col">Codigo</th>
					      <th scope="col">Cantidad</th>
					    </tr>
					  </thead>
					  <tbody>

				 	<?php 
						$result = $conexion->query("SELECT * from artPedidos");

						foreach ($result as $fila){
						$PedidoNum = $fila['ID'];							
					?>

					<?php  if ($fila['Cliente'] == $_SESSION['usuarios'] and $fila['numArt'] != 0) {?>
					    <tr class="">

							<?php if($fila['numArt'] != $numArtI){?>
								<td><?php echo $fila['Codigo']?></td> 	
								<td><?php echo $fila['Cantidad']?></td>
							<?php 
								}
							?>

					    </tr>
					<?php 
							}
						}
					 ?>


				  </tbody>
	                </table>
	            </div>

	        </div>
	    </div>
	</div>
</body>
</html>