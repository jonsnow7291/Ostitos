<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include("Conexion.php");
    $id=$_GET['IdUsu'];
    $sqlruta="select * from usuario where IdUsu =".$id;
    $resultadoUsuario=mysqli_query($conect,$sqlruta);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Admin</title>
    <link rel="stylesheet" href="/Codigos/css/InAdmin.css">
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
                        <a href="/Codigos/Inicio.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/Productos.html" class="nav-link" target="_blank">Productos</a>
                    </li>
                    <li class="nav-item">    
                    <?php if($resultadoUsuario&&$row= mysqli_fetch_assoc($resultadoUsuario)){

                            echo "<a target='_blank' href='/Codigos/Editar.php?IdUsu=".$row["IdUsu"]."' class='nav-link'>Admin:".$row['NicknameUsu']."</a>";
                            }  ?>
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
                <img src="/Pagina Web/Imagenes/Productos/T32/Imagen principal.webp" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5> T32 okunami</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <a href="#" class="btn btn-primary mt">Mas informacion</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Pagina Web/Imagenes/Productos/Xt95/Imagen principal.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5> XT95 PRO LENOVO </h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <a href="#" class="btn btn-primary mt">Mas informacion</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/Pagina Web/Imagenes/Productos/GM2/Imagen principal.webp" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h5> GM2 PRO LENOVO</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <a href="#" class="btn btn-primary mt">Mas informacion</a>
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
</html>