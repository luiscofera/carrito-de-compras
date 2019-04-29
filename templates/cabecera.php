<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
    
	<link rel="stylesheet" href="/carrito de compras/estilos/estilos_header_footer.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_productos_general.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_mostrar_carrito.css">
    <link rel="stylesheet" href="/carrito de compras/sistema de login/estilos_login.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_principal.css">
    <link rel="stylesheet" href="/carrito de compras/sistema de login/estilos_registrarse.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_productos_individual.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_barra_busqueda.css">
    <link rel="stylesheet" href="/carrito de compras/sistema de login/estilos_registro.css">
    <link rel="stylesheet" href="/carrito de compras/estilos/estilos_mostrar_producto.css">

    <!-- <script src="/carrito de compras/js/jquery-3.3.1.min.js"></script> -->

    <!-- <script type="text/javascript" src="js/slyder.js"></script> -->

	<link rel="stylesheet" href="/carrito de compras/css/bootstrap.min.css">

    <!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <!-- SCRIPT DE JQUERY SI NO FUNCIONA DESCOMENTARLO -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    
</head>


<body>
    <!-- <div class="banner_superior">
        <img src="/carrito de compras/imagen/banner_superior.jpg" alt="">
    </div> -->
	<!--HEADER DE LA PAGINA-->
	<header>
        <!-- ENCABEZADO: LOGO - BARRA DE BUSQUEDA - LOGIN -->
        <div id="encabezado">
            <div id="logo">
            	<a href="/carrito de compras/index.php"><img src="/carrito de compras/imagen/logo1.png" alt=""></a>
            </div>

            <!-- menu de navegacion -->
            <div class="navegacion">
            
                    <input type="checkbox" id="btn-menu">
                    <label for="btn-menu"><i class="fa fa-bars"></i></label>
                    <nav class="menu">
                        <ul>
                            <li><a href="/carrito de compras/index.php">Inicio</a></li>
                            <li class="submenu"><a href="#">Catalogo</a>
                                <ul>
                                    <li><a href="/carrito de compras/categorias.php?cat=tarjeta de video">Tarjeta de Video</a></li>
                                    <li><a href="/carrito de compras/categorias.php?cat=ram">Ram</a></li>
                                    <li><a href="/carrito de compras/categorias.php?cat=discos duros">Discos Duros</a></li>
                                    <li><a href="/carrito de compras/categorias.php?cat=procesadores">Procesadores</a></li>
                                    <li><a href="/carrito de compras/categorias.php?cat=placa madre">Placas Madre</a></li>
                                    <li><a href="/carrito de compras/categorias.php?cat=case">Case/Gabinetes</a></li>
                                    <li><a href="#">Accesorios</a></li>
                                </ul>
                            </li>
                            <li class="submenu"><a href="#">Zona Gamer</a>
                                <ul>
                                    <li><a href="">Procesadores/Complementos</a></li>
                                    <li><a href="">Placas Madre</a></li>
                                    <li><a href="">Memorias RAM</a></li>
                                    <li><a href="">Cases/Gabinetes</a></li>
                                    <li><a href="">Tarjetas de video</a></li>
                                    <li><a href="">Monitores</a></li>
                                    <li><a href="">Fuentes</a></li>
                                    <li><a href="">Accesorios/Perifericos</a></li>
                                    <li><a href="">Kit´s Gamer</a></li>
                                </ul>
                            </li>
                            <li class="submenu"><a href="#">Mas Productos</a>
                                <ul>
                                    <li><a href="">Camaras & Accesorios</a></li>
                                    <li><a href="">Estabilizadores</a></li>
                                    <li><a href="">Adaptadores</a></li>
                                    <li><a href="">Memorias MicroSD/USB</a></li>
                                    <li><a href="">Parlantes</a></li>
                                    <li><a href="">Redes/Switch</a></li>
                                    <li><a href="">Otros</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="/carrito de compras/modalidades_pago.php">Modalidades de Pago</a></li> -->
                        </ul>
                    </nav>
        </div>

            <!-- FORMULARIO PARA LA BARRA DE BUSQUEDA -->
            <div id="busqueda" class="webdesigntuts-workshop">
                <form action="/carrito de compras/barra de busqueda/resultado_busqueda.php" method="get">
                    <input class="txtbusqueda" type="text" name="buscar" placeholder="Buscar...">
                    <input class="boton_buscar" type="submit" name="enviando" value="Buscar!!">
                </form>
            </div>
        </div>

        
        

    </header>
      <!--FINAL DEL HEADER DE LA PAGINA-->

      <!--INICIO CONTENEDOR PRINCIPAL-->
    <br><!-- 
    <?php if($mensaje!=""){ ?>
    <div class="alert alert-success">
        <br>
        <?php echo $mensaje; ?>
        <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
    <?php } ?> -->

    <section id="contenedorPrincipal">
    