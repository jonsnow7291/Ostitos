<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if($_SESSION['IdUsu']){ 
    include("Conexion.php");
    $sqlruta="select * from usuario where IdUsu =". $_SESSION['IdUsu'];
    $resultadoUsuario=mysqli_query($conect,$sqlruta);
    $filas= mysqli_fetch_assoc($resultadoUsuario);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Admin</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Inicio.css">
</head>

<body>
    
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
                        <a href="/Codigos/Inicio.php" class="nav-link text-muted">Inicio</a>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/Productos.php" class="nav-link text-muted " target="_blank">Productos</a>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/CerrarSesion.php" class="nav-link text-muted">CerrarSesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/Adicionales/ImgsAdminInicio/Carousel/Bienvenida.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <?php
                        echo "<h5>Bienvevenido Admin :".$filas['NicknameUsu']."</h5>";
                        ?>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Adicionales/ImgsAdminInicio/Carousel/Sebas.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>Administra tus productos</h5>
                    
                    <a href="/Codigos/CRUD/ListaProductos.php" class="btn btn-primary mt">Administrar</a>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/Adicionales/ImgsAdminInicio/Carousel/Daniel Y Miguel.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5>Administra tu base de usuarios</h5>
                    
                    <a href="/Codigos/CRUD/ListaUsuariosNueva.php" class="btn btn-primary mt">Administrar</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>
<?php }else{
    header("location:Errores/Error_404.html");
}?>
</html>
