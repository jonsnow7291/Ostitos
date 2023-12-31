<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    include("Conexion.php");
    $Rol = null;
    if(isset($_SESSION['IdUsu'])){
    $ruta="Select * from usuario where Idusu = ".$_SESSION['IdUsu'];
    $result=mysqli_query($conect,$ruta);
    $fila = $result->fetch_assoc();
    $Rol = $fila['RolUsu'];
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ostitosProductos</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Productos.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

            <div class="container">
                <a href="#" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                        aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <?php
                        if($Rol==2){
                            echo "<li class='nav-item'>
                            <a href='/Codigos/InicioCliente.php' class='nav-link'>Inicio Cliente</a>
                            </li>";
                        }elseif($Rol==1){
                            echo "<li class='nav-item'>
                            <a href='/Codigos/InicioAdmin.php' class='nav-link'>Inicio Administrador</a>
                            </li>";
                        }elseif(!$Rol){
                            echo "
                            <li class='nav-item'>
                            <a href='/Codigos/Inicio.php' class='nav-link'>Inicio</a>
                            </li>                         
                            <li class='nav-item'>
                                <a href='/Codigos/login.php' class='nav-link'>Inicio de Sesion</a>
                            </li>
                            <li class='nav-item'>
                                <a href='/Codigos/registro.php' class='nav-link'>Registrate</a>
                            </li>

                            "
                            ;
                        }
                        ?>
                    </ul>
                </div>
                <header>
                    <div class="shopping">
                        <img src="/Adicionales/Imagen Carrito/3144456.png">
                        <span class="quantity">0</span>
                    </div>
                </header>
            </div>
            <div class="list"></div>          
            <div class="card">
                    <h1>Tu carrito</h1>
                    <ul class="listCard"></ul>
                    <div class="checkOut">
                        <div class="total">0</div>
                        <div class="closeShopping">Cerrar</div>
                    </div>
            </div>
        </nav>
    </nav>
    <section class="portafolio-section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header text-center text-black pb-5">
                    <h2 class="titulo">Productos</h2>
                </div>
                <?php 
                $RutaProductos="select * from producto";
                $Resultado=mysqli_query($conect,$RutaProductos);
                while($fila = $Resultado->fetch_assoc()){
                ?>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="text-center pb-3">
                        <div class="">
                            <div class="img">
                                <div class="img-area mb-4">
                                <?php
                                echo '<a href="'.$fila['linkProducto'].'"><img class="img-fluid rounded-pill shadow-none p-3 mb-5 bg-info rounded" src="data:image/jpeg;base64,' . base64_encode($fila["FotoPro"]) . '" alt="Imagen del Producto" class="d-bock w-100"></a>';
                                ?>
                                </div>
                            </div>
                            <h6 class="filtro">GAMER</h6>
                            <h3><?php echo $fila['NombrePro']?>
                            <h5 class="precio">$<?php echo $fila['PrecioPro']?></h5>
                            <a href="#"><button class="btn bg-primary text-white"><i class="bi bi-bag-check-fill"></i><br>Añadir a carrito</button></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            
            </div>
        </div>
    </section>
    <body>
        <footer class="bg-black text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                <hr class="mb-4">
                <p>
                En "Ostitos", nos apasiona brindar una experiencia auditiva excepcional. Ya sea que estés buscando la potencia de bajos profundos, la claridad de tonos altos o la comodidad durante todo el día, tenemos el audífono perfecto para ti.
<br>
¿Tienes preguntas, comentarios o necesitas asistencia personalizada? Estamos aquí para ayudarte. ¡Contáctanos y deja que nuestro equipo experto te guíe hacia el audífono ideal para satisfacer tus necesidades auditivas!
                </p>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">CONTACTANOS</h5>
                    <hr class="mb-4">
                    <a href="https://maps.app.goo.gl/vXkYKtG5JYkdGMoNA"><i class="bi bi-house-door-fill"></i> PUNTO FISICO</a><br>
                    <a href="+57 310 3143832"><i class="bi bi-telephone-fill"></i> TELEFONO</a><br>
                    <a href="#"><i class="bi bi-envelope-fill"></i> CORREO</a><br>
                    <a href="#"><i class="bi bi-messenger"></i> MESSENGER</a>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary"> REDES SOCIALES</h5>
                    <hr class="mb-4">
                    <a href="https://maps.app.goo.gl/vXkYKtG5JYkdGMoNA"><i class="bi bi-facebook"></i> FACEBOOK</a><br>
                    <a href="+57 310 3143832"><i class="bi bi-instagram"></i> INSTAGRAM</a><br>
                    <a href="#"><i class="bi bi-tiktok"></i> TIKTOK</a><br>
                    <a href="#"><i class="bi bi-whatsapp"></i> WHATSAPP</a><br>
                </div>

            </div>
        </div>
    </footer>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="/Codigos/css/app.js"></script>
</body>
</html>