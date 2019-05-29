<?php 
	require 'pedidosC.php';
	session_start();
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
	            	<table class="table">
					  <thead class="thead color3">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Fecha</th>
					      <th scope="col">Numero de articulos</th>
					      <th scope="col">Articulos</th>
					    </tr>
					  </thead>
					  <tbody>
					<?php 
						$result = $conexion->query("SELECT * from Pedido");

						foreach ($result as $fila){
							if($fila['permisos'] != 1){
								$PedidoNum = $fila['ID'];							
					?>
						<?php  if ($fila['Cliente'] == $_SESSION['usuarios'] and $fila['numArt'] != 0) {?>
						    <tr class="">
						      <td><?php echo $fila['ID']; ?></td>
						      <td><?php echo $fila['Fecha']; ?></td>
						      <td><?php echo $fila['numArt']; ?></td>
						
								<?php 
									$result = $conexion->query("SELECT * from artPedidos where numPedido = $PedidoNum ");
									$numArtI = 1 ;
									foreach ($result as $fila){
								?>
											<?php if($fila['numArt'] != $numArtI){?>
												<td><?php echo $fila['Codigo']. "\n" ; ?></pre></td> 	
											<?php $numArtI++; }?>
								<?php 
									}
								?>
						    </tr>
					<?php 
								}
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