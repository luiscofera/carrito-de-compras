<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
?>
<div id="cuerpo">
	<div class="referencia">
		<ul>
			<li>Home</li>
			<li>Catálogo</li>
			<li>"Producto"</li>
		</ul>
	</div>
	<hr>
	<div id="prod_mostrados">
		<img src="<?php echo $imagen; ?>" alt="">
		<div class="prod_mostrados_derecha">
			<h3><?php echo $nombre; ?></h3>
			<hr>
			<p><?php echo $descripcion; ?></p>
		</div>
	</div>

</div>






<?php include 'templates/pie.php'; ?>