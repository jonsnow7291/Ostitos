<!DOCTYPE html>
<html lang="en">
<head>
    <!--incluimos nuestra conexion a  base de datos-->
    <?php 
    session_start();
    if($_SESSION){
    include("Conexion.php");
    $IdLink=$_SESSION['IdUsu'];
    $sqlruta="select * from usuario where IdUsu =". $_SESSION['IdUsu'];
    $resultadoUsuario=mysqli_query($conect,$sqlruta);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostitos Inicio</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Inicio.css">
</head>
<!--Codigo Para el mas vendido-->
<?php 
    include("Conexion.php");
    $ResultadoMV=$conect->query("select * from vista_prodesta where IdProDesta = 3");
    $fila = $ResultadoMV->fetch_assoc();
    $NombreMV=$fila['Nombre'];
    $CaracMV=$fila['Caracteristicas'];
    $ImgMV=$fila['Imagen2'];
?>
<body>

    <!--aqui empieza el menu de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/Productos.php" class="nav-link" target="_blank">Productos</a>
                    </li>
                    <li class="nav-item">    
                            <?php if($resultadoUsuario&&$row= mysqli_fetch_assoc($resultadoUsuario)){

                            echo "<a target='_blank' href='/Codigos/Editar.php?IdUsu=".$row["IdUsu"]."' class='nav-link'>Cliente:".$row['NicknameUsu']."</a>";
                            }  ?>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/CerrarSesion.php" class="nav-link">CerrarSesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--aqui termina el menu de navegacion-->

    <!--aqui empieza el carousel-->

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="0" class="active" 
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="3" aria-current="true"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="4" aria-current="true"
                aria-label="Slide 5"></button>

        </div>
        <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php for ($Pro = 1; $Pro <= 3; $Pro++) {
            $rutaCarousel = "SELECT * FROM vista_prodesta WHERE IdProDesta = $Pro";
            $resultadoCarousel = $conect->query($rutaCarousel);
            $filaCarousel = $resultadoCarousel->fetch_assoc();
        ?>
            <div class="carousel-item <?php echo ($Pro == 1) ? 'active' : ''; ?>">
                <?php
                $imgCarousel = $filaCarousel['Imagen'];
                echo '<img src="data:image/jpeg;base64,' . base64_encode($imgCarousel) . '" alt="Imagen del Producto" class="d-bock w-100">';
                ?>
                <div class="carousel-caption">
                    <h5><?php
                        $nombreCarousel = $filaCarousel['Nombre'];
                        echo "$nombreCarousel";
                        ?></h5>
                    <p><?php
                        $ResCarousel = $filaCarousel['Resumen'];
                        echo "$ResCarousel";
                        ?> </p>
                        <?php $LinkProducto = $filaCarousel['Enlace'];?>
                    <a href="<?php echo "$LinkProducto"; ?>" class="btn btn-primary mt">Mas informacion</a>
                </div>
            </div>
        <?php } ?>
    </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">next</span>
        </button>
    </div>

    <!--Termina el carrusel-->
    <!-- aqui empieza el mas vendido-->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($ImgMV).'" alt="Imagen del Producto" class="d-bock w-100">';?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-white">
                        <center><h2> El mas vendido!! </h2></center>
                        <?php echo "<h2>".$NombreMV."</h2>";?>
                        <?php echo "<p>".$CaracMV."</p>";?>
                        <a href="#" class="btn btn-primary">Mas informacion</a>
                        <a href="#" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Nuestros servicios</h2>
                        <p>
                            Somos una empresa de tecnología, que se especializa en la venta de artículos electrónicos y cuyo énfasis se centra en la distribución de audífonos inalámbricos, contamos con diferentes tipos de productos los cuales se ajustan a tus requerimientos. Desde audífonos especiales para el gaming, hasta audífonos especiales para el trabajo. Nuestra misión es brindarte la mejor atención y calidad mediante nuestros productos, ayudando a nuestros clientes a la hora de elegir entre la gran gama de productos existen en el mercado aquellos que se adapten a lo que realmente están buscando con una excelente relación costo beneficio.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-person-check-fill"></i>
                            <h3 class="card-title">Registro</h3>
                            <p class="lead">
                                Ey tú, que esperas para registrarte, es completamente gratis y además puedes disfrutar de las ofertas y beneficios exclusivos de nuestra comunidad.
                            </p>
                            <button class="btn bg-primary text-white" >Mas informacion</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-person-circle"></i>
                            <h3 class="card-title">Inicio de sesion</h3>
                            <p class="lead">
                                Inicia sesión para conocer todo lo que tenemos disponible para ti, además puedes llevar el control de tus productos de una manera más fácil y sencilla.
                            </p>
                            <button class="btn bg-primary text-white"  href="/Codigos/login.html">Mas informacion </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-cart-check-fill"></i>
                            <h3 class="card-title">Carrito</h3>
                            <p class="lead">
                                Desde aquí puedes registrar tus productos, realizar el pago de estos mismos además de ver el estado de tu pedido y gestionar tus compras.<br>¡¡Protencia tu juego!!
                            </p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--aqui empiezan los productos destacados-->
    <section class="portafolio-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Productos destacados</h2>
                        <p>
                            ¡Ojea los productos preferidos por la comunidad o aquellos que cuentan con excelentes descuentos!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <!--aqui empeza el codigo del primer producto destacado-->
                                <?php
                                    $ResultadoDestaUno=$conect->query("select * from vista_prodesta where IdProDesta = 4");
                                    $filaDestaUno = $ResultadoDestaUno->fetch_assoc();
                                    $NombreDestaUno=$filaDestaUno['Nombre'];
                                    $CaracDestaUno=$filaDestaUno['Caracteristicas'];
                                    $ImgDestaUno=$filaDestaUno['Imagen3'];
                                    $LinkDestaUno=$filaDestaUno['Enlace'];
                                ?>
                                <!--aqui empeza el codigo del primer producto destacado-->
                            <img <?php echo'class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($ImgDestaUno).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                            </div>
                            <h3><?php echo"$NombreDestaUno";?></h3>
                            <p class="lead"><?php echo "$CaracDestaUno"; ?></p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="<?php echo "$LinkDestaUno";?>" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <!--aqui empeza el codigo del primer producto destacado-->
                                <?php
                                    $ResultadoDestaDos=$conect->query("select * from vista_prodesta where IdProDesta = 5");
                                    $filaDestaDos = $ResultadoDestaDos->fetch_assoc();
                                    $NombreDestaDos=$filaDestaDos['Nombre'];
                                    $CaracDestaDos=$filaDestaDos['Caracteristicas'];
                                    $ImgDestaDos=$filaDestaDos['Imagen3'];
                                    $LinkDestaDos=$filaDestaDos['Enlace'];
                                ?>
                                <!--aqui empeza el codigo del primer producto destacado-->
                                <img <?php echo'class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($ImgDestaDos).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                            </div>
                            <h3><?php echo"$NombreDestaDos";?></h3>
                            <p class="lead"><?php echo"$CaracDestaDos";?></p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="<?php echo "$LinkDestaDos";?>" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <!--aqui empeza el codigo del tercer producto destacado-->
                                <?php
                                    $ResultadoDestaTre=$conect->query("select * from vista_prodesta where IdProDesta = 6");
                                    $filaDestaTre = $ResultadoDestaTre->fetch_assoc();
                                    $NombreDestaTre=$filaDestaTre['Nombre'];
                                    $CaracDestaTre=$filaDestaTre['Caracteristicas'];
                                    $ImgDestaTre=$filaDestaTre['Imagen3'];
                                    $LinkDestaTre=$filaDestaTre['Enlace'];
                                ?>
                                <!--aqui empeza el codigo del tercer producto destacado-->
                                <img <?php echo'class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($ImgDestaTre).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                            </div>
                            <h3><?php echo"$NombreDestaTre";?></h3>
                            <p class="lead"><?php echo"$CaracDestaTre";?></p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="<?php echo "$LinkDestaTre";?>" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--aqui terminan los productos destacados-->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Asesores</h2>
                        <p> 
                            Contamos con un excelente equipo de trabajo es por esto que desde aquí puedes conocerlos mejor, recuerda que ellos siempre estarán dispuestos a atenderte tu solicitud.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="/Adicionales/Imagen principal/logos/logo.png" class="img-fluid roundad-circle" alt="">
                            <h3 class="card-title py-2">Contactanos</h3>
                            <p class="card-text">
                                Puedes contactarnos para conocer mas sobre nosotros, mediante WhatsApp te podemos ofrecer una atención más personaliza a través de nuestros asesores <br> Te esperamos!!. 
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                            <a href="https://api.whatsapp.com/send/?phone=%2B573103143832&text&type=phone_number&app_absent=0"><button class="btn bg-primary text-white"><i class="bi bi-whatsapp"></i><br>Whatsapp</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="/Adicionales/Imagen principal/logos/logo.png" class="img-fluid roundad-circle" alt="">
                            <h3 class="card-title py-2">Contactanos</h3>
                            <p class="card-text">
                                Puedes contactarnos para conocer más sobre nosotros, mediante Instagram puedes ver aquellas fotos y videos de nuestros productos, las cuales no están publicadas en nuestra página web.
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                            <a href="https://www.instagram.com/tostitos/reels/"><button class="btn bg-primary text-white"><i class="bi bi-instagram"></i><br>Instagram</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="/Adicionales/Imagen principal/logos/logo.png" class="img-fluid roundad-circle" alt="">
                            <h3 class="card-title py-2">Contactanos</h3>
                            <p class="card-text">
                                Puedes contactarnos para conocer más sobre nosotros, mediante Facebook puedes consultar la calificación de nuestros clientes, también puedes enterarte más rápido de las nuevas noticias.
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                            <a href="https://www.facebook.com/profile.php?id=100093342642922"><button class="btn bg-primary text-white"><i class="bi bi-facebook"></i><br>Facebook</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center bg-dark">
                        <div class="card-body text-white">
                            <img src="/Adicionales/Imagen principal/logos/logo.png" class="img-fluid roundad-circle" alt="">
                            <h3 class="card-title py-2">Contactanos</h3>
                            <p class="card-text">
                                Puedes contactarnos para conocer más sobre nosotros, mediante Tik tok puedes ver trends, de contenido interesante tips y consejos que te damos para el cuidado de nuestros productos
                            </p>
                            <p class="socials">
                                <i class="bi bi-twitter text-white mx-1"></i>
                                <i class="bi bi-facebook text-white mx-1"></i>
                                <i class="bi bi-linkedin text-white mx-1"></i>
                                <i class="bi bi-instagram text-white mx-1"></i>
                            </p>
                            <a href="https://www.tiktok.com/@ostitos.coo"><button class="btn bg-primary text-white"><i class="bi bi-tiktok"></i><br>tiktok</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2>Contacto</h2>
                        <p>
                            Puedes contactarnos desde una amplia gama de aplicaciones como por ejemplo mediante nuestro correo electrónico o mediante nuestras redes sociales
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-black p-2 text-center">
        <div class="container">
            <p class="text-white"> Ostitos.com</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
<?php }else{
    header("location:Errores/Error_404.html");
}?>
</html>