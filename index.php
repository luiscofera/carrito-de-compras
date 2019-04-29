<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';
?>

    <?php

    //--------CONSULTA PARA EL SLYDER PRINCIPAL----------
    $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE `Categoria` LIKE 'slyder1'");
  $sentencia->execute();
  $listaProductos3=$sentencia->fetchAll(PDO::FETCH_ASSOC);

  //--------CONSULTA PARA EL SLYDER PEQUENO----------
  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE `Categoria` LIKE 'slyderpeque1'");
  $sentencia->execute();
  $listaProductos4=$sentencia->fetchAll(PDO::FETCH_ASSOC);


    // -------CONSULTA PARA LAS OFERTAS--------
  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE `comodin` LIKE 'ofertas'");
  $sentencia->execute();
  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    //------CONSULTA PARA NUEVOS
  $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` WHERE `comodin` LIKE 'nuevos'");
  $sentencia->execute();
  $listaProductos2=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  //print_r($listaProductos);
  ?>

        <!-- SLYDER 1 -->
    <div class="slyder">
            <ul>
                <?php foreach ($listaProductos3 as $producto) { ?>

                <li><img src="<?php echo $producto['Imagen']; ?>"></li>

                <?php } ?>

            </ul>
    </div>
    <!-- FIN SLYDER 1 -->
    <section>      
        <article id="cuerpo">
            <h2>OFERTAS</h2>
            <div class="slyder-pro">
                <ul>

                    <?php foreach ($listaProductos as $producto) { ?>

                        <li>
                            <a href="<?php echo $producto['Link']; ?>"><img src="<?php echo $producto['Imagen']; ?>"></a>
                            <h3><?php echo $producto['Nombre']; ?></h3>
                            <form action="mostrar_producto.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $producto['ID'];?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>">
                            <input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['Imagen'];?>">
                            <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $producto['Descripcion'];?>">
                            <input type="hidden" name="categoria" id="categoria" value="<?php echo $producto['Categoria'];?>">
        
                            <button class="btn_ver_producto" name="btnVerProducto" value="Ver Producto" type="submit">Ver Producto
                            </button>
                            </form>

                        </li>



                    <?php } ?>

                </ul>
            </div>
        </article>

        <article id="cuerpo">
            <!-- estilos en estilos_principal.css -->
            <div class="contenedor_slyder_peque">
                <div class="peque1">
                    <ul>
                        <?php foreach ($listaProductos4 as $producto) { ?>

                        <li><img src="<?php echo $producto['Imagen']; ?>"></li>

                        <?php } ?>
                    </ul>
                </div>

                <div class="peque2">
                    <ul>
                    <?php foreach ($listaProductos2 as $producto) { ?>
                        <li>
                            <a href="<?php echo $producto['Link']; ?>"><img src="<?php echo $producto['Imagen']; ?>"></a>
                            <h3><?php echo $producto['Nombre']; ?></h3>
                            <form action="mostrar_producto.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $producto['ID'];?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>">
                            <input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['Imagen'];?>">
                            <input type="hidden" name="descripcion" id="descripcion" value="<?php echo $producto['Descripcion'];?>">
        
                            <button class="btn_ver_producto" name="btnVerProducto" value="Ver Producto" type="submit">Ver Producto
                            </button>
                            </form>
                        </li>
                    <?php } ?>
                </ul>
                </div>  
            </div>
        </article>
    </section>
    
<?php include 'templates/pie.php'; ?>