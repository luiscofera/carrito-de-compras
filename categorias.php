<?php 
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';
?>

  <?php
  $categoria=$_GET["cat"];
  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE Categoria LIKE '$categoria'");
  $sentencia->execute();
  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  //print_r($listaProductos);
  ?>
<h3><?php echo $categoria; ?></h3>
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
		  		<form action="mostrar_producto.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $producto['ID'];?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>">
                            <input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['Imagen'];?>">
                            <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $producto['Descripcion'];?>">
                            <input type="hidden" name="categoria" id="categoria" value="<?php echo $producto['Categoria'];?>">
        
                            <button class="boton-comprar" name="btnVerProducto" value="Ver Producto" type="submit">Ver Producto
                            </button>
                            </form>
	
		  		<!--<p><?php echo $producto['Descripcion']; ?></p>-->
		  	</div>
		  
	  <?php } ?>
	</section>
</div>
  <?php include 'templates/pie.php'; ?>