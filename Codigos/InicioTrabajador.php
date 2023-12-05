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

                            echo "<a class='nav-link'>Empleado:".$row['NicknameUsu']."!!</a>";
                            }  ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>
</html>