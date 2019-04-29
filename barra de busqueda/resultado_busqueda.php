<?php
$busqueda=$_GET['buscar'];
include '../global/config.php';
include '../global/conexion.php';
include '../carrito.php';
include '../templates/cabecera.php';
?>

	<!--<div class="alert alert-success">
		<br>
		<?php echo $mensaje; ?>
		<a href="#" class="badge badge-success">Ver carrito</a>
	</div>
	-->
  <?php
  $sentencia=$pdo->prepare("SELECT * FROM tblproductos WHERE Nombre LIKE '%$busqueda%' OR Precio LIKE '%$busqueda%' OR Categoria LIKE '%$busqueda%'");
  $sentencia->execute();
  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

  //$consulta="SELECT * FROM `procesadores` WHERE Nombre LIKE '%$busqueda%'";
  //$consulta2=mysqli_query($servidor,$consulta);
  //$listaProductos=mysqli_fetch_array($consulta2,MYSQL_ASSOC);
  //print_r($listaProductos);
  ?>
<h3>Resultado de la busqueda: <?php echo $busqueda; ?></h3>
<div class="contenedorGeneral">
	<section id="contenedor-productos">
	  <?php foreach ($listaProductos as $producto) { ?>
		  
		  	<div class="producto">
		  		<a href="<?php echo $producto['Link']; ?>">
		  		<img 
		  		title="<?php echo $producto['Nombre']; ?>"
		  		src="<?php echo $producto['Imagen']; ?>" 
		  		alt="<?php echo $producto['Nombre']; ?>"
		  		>
		  		</a>
		  		<h3><?php echo $producto['Nombre']; ?></h3>
					
					<!--FORMULARIO PARA ENVIAR DATOS AL CARRITO DE COMPRAS-->
		  		<form action="mostrar_productos.php" method="post">
						<input type="hidden" name="id" id="id" value="<?php echo $producto['ID'];?>">
						<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>">
						<input type="hidden" name="precio" id="precio" value="<?php echo  $producto['Precio'];?>">
	
		  			<button class="boton-comprar" name="btnAccion" value="Agregar" type="submit">
		  			Ver detalles
		  			</button>
		  		</form>
	
		  		<!--<p><?php echo $producto['Descripcion']; ?></p>-->
		  	</div>
		  
	  <?php } ?>
	</section>
</div>
  <?php include '../templates/pie.php'; ?>