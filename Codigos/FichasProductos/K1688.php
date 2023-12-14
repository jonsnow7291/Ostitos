<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xt95 Lenovo</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/estilosp.css">
</head>
                <!--aqui empieza el codigo de  el xt95-->
                <?php
                        include ("../Conexion.php");
                        $RutaP = "select * from fichas_productos where Id = 8 ";
                        $resultadoP = $conect->query($RutaP);
                        $fila = $resultadoP->fetch_assoc();
                        $Nombre = $fila["Nombre"];
                        $Carac = $fila["Caracteristicas"];
                        $Imagen = $fila["Imagen"];
                        $Imagen3 = $fila["Imagen3"];
                        $Imagen4 = $fila["Imagen4"];
                        $Imagen5 = $fila["Imagen5"];
                        $Imagen6 = $fila["Imagen6"];
                        $Imagen7 = $fila["Imagen7"];
                    ?>
                <!--aqui Termina el codigo de  el xt95-->
<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/Codigos/Inicio.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="/Codigos/login.php" class="nav-link">Inicio de Sesion</a>
                        </li>
                        <li class="nav-item">    
                        <a href="/Codigos/Productos.php" class="nav-link" target="_blank">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="col-lg-4 col-md-12 col-12">
            <div class="img-area mb-4">
            <img <?php echo'class="img" class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($Imagen).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
            </div>
            <div class="todas-img">
                <div class="">
                <img <?php echo'class="imagenes-pequeñas" src="data:image/jpeg;base64,'.base64_encode($Imagen3).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                </div>
                <img <?php echo'class="img-1" src="data:image/jpeg;base64,'.base64_encode($Imagen4).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-2" src="data:image/jpeg;base64,'.base64_encode($Imagen5).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-3" src="data:image/jpeg;base64,'.base64_encode($Imagen6).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-4" src="data:image/jpeg;base64,'.base64_encode($Imagen7).'" alt="Imagen del Producto" class="d-bock w-100"'?>>            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="text-black" class="text">
                <h2 class="text"><?php echo "$Nombre";?><br> lo ultimo en innovacion </h2>
                <p class="text1">
                <?php echo "$Carac";?>
                </p>
                <div class="boton">
                    <a href="https://api.whatsapp.com/send?phone=++573213994319&text=Hola,%20quisiera%20mas%20informacion%20respecto%20a%20este%20producto:<?php echo "$Nombre";?>" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Añadir a carrito</a>
                </div>    
            </div>
        </div>  
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>