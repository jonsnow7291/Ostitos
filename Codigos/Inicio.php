<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include("Conexion.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostitos Inicio</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Inicio.css">
</head>

<body>


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
                        <a href="/Codigos/Inicio.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="/Codigos/login.php" class="nav-link">Inicio de Sesion</a>
                        </li>
                        <li class="nav-item">    
                        <a href="/Codigos/registro.php" class="nav-link">Registro</a>
                    </li>
                        <li class="nav-item">    
                        <a href="/Codigos/Productos.html" class="nav-link" target="_blank">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="0" class="active" 
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="carouselE" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <!--Iniciamos bucle para lograr que por cada registro halla un slide-->
            <?php for($i = 1; $i <= 3; $i++){
                $rutaProductos = "SELECT * FROM vista_prodesta WHERE IdProDesta = $i";
                $resultadoProductos = $conect->query($rutaProductos);
                $filaProducto = $resultadoProductos->fetch_assoc();
            ?>
            <div class="carousel-item active">
                <img src="/Adicionales/Productos/T32/Imagen principal.webp"class="d-bock w-100" alt="">
                <div class="carousel-caption">
                    <h5><?php 
                    $nombreProducto = $filaProducto['Nombre'];
                

                    echo "$nombreProducto";?></h5>
                    <p><?php 
                        $ResProducto = $filaProducto['Resumen'];

                        echo "$ResProducto";?> </p>
                    <a href="#" class="btn btn-primary mt">Mas informacion</a>
                </div>
            </div>
            <?php }?>
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
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="/Adicionales/Imagen principal/XT95 imagen con mujer.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text text-white">
                        <h2> Xt95 pro lenovo <br> lo ultimo en inovacion </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae eos iste in repellendus
                            veritatis molestias accusantium aliquam, labore, ratione iusto ipsum vero! Culpa magni
                            inventore animi obcaecati omnis provident eum?
                        </p>
                        <a href="#" class="btn btn-primary">Mas informacion</a>
                        <a href="#" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!--Termina el carrusel-->
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
                                Desde aquí puedes registrar tus productos, realizar el pago de estos mismos además de ver el estado de tu pedido y gestionar tus compras.
                            </p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <img src="/Adicionales/Productos/G11/Imagen principal.webp" class="img-fluid" alt="">
                            </div>
                            <h3>G11 GAMER</h3>
                            <p class="lead">
                                Estos audífonos Gamer los puedes controlar mediante la tecnología touch control también cuentan con Bluetooth 5.0, cancelación de ruido y un emparejamiento automático. Su autonomía es de 5 a 6 horas, son resistentes al agua y además son compatibles con Android y iOs.
                            </p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="#" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="/Adicionales/Productos/X15/Imagen principal.jpg" class="img-fluid" alt="">
                            </div>
                            <h3>X15 GAMER</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem culpa laborum dolore
                                nemo in quaerat, natus sunt, obcaecati quibusdam tempore praesentium excepturi cumque
                                ratione fuga dicta, ipsa enim delectus. Tempore!
                            </p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="#" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-dark pb-2">
                        <div class="card-body text-white">
                            <div class="img-area mb-4">
                                <img src="/Adicionales/Productos/G7S/Imagen principal g7s.jpg" class="img-fluid" alt="">
                            </div>
                            <h3>G7S GAMER</h3>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem culpa laborum dolore
                                nemo in quaerat, natus sunt, obcaecati quibusdam tempore praesentium excepturi cumque
                                ratione fuga dicta, ipsa enim delectus. Tempore!
                            </p>
                            <button class="btn bg-primary text-white">Mas informacion</button>
                            <a href="#" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                Puedes contactarnos para conocer mas sobre nosotros, mediante WhatsApp te podemos ofrecer una atención más personaliza a través de nuestros asesores. 
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
                                Puedes contactarnos para conocer más sobre nosotros, mediante Facebook puedes consultar la calificación de nuestros clientes, también puedes enterarte más rápido de las nuevas noticias para nuestra comunidad. 
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
</html>