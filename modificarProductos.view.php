<?php 
	require 'modificarProductos.php';
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
	            	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> "method="post">
		            	<input type= "Text" class="form-control" placeholder="Codigo" name="codigo" id ="codigo">
						
						<?php if (!empty($error)){ ?>
							<div class="alert error"> 
								<?php echo $error; ?>
							</div>
						<?php  }?>

						<input type="submit" name="buscar" id="buscar" class="btn color3" value="Buscar" >
						
		            	<table class="table">
						  <thead class="thead color3">
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Codigo</th>
						      <th scope="col">Producto</th>
						      <th scope="col">Cantidad</th>
						      <th scope="col">Precio</th>
						      <th scope="col">Marca</th>
						    </tr>
						  </thead>
						  <tbody>
							<?php 
								if ($enviado == true) {
									$result = $conexion->query("SELECT * from Productos WHERE codigo = $codigo ");
									foreach ($result as $fila){
							?>
							    <tr>
							      <td><?php echo $fila['ID']; ?></td>
							      <td><?php echo $fila['codigo']; ?></td>
							      <td><?php echo $fila['nombreP']; ?></td>
							      <td><?php echo $row['cantidad']; ?></td>
							      <td><?php echo $fila['precio']; ?></td>
							      <td><?php echo $fila['marca']; ?></td>
							    </tr>
							<?php 
									}
								}	
							 ?>
						  </tbody>
	                	</table>
	                	<input type="submit" name="cambiar" id="cambia" class="btn color3" value="Guardar cambios">
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>