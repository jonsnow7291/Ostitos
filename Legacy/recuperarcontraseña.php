
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidaste tu contraseña</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
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
                        <a href="Inicio.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
 
                        <li class="nav-item">    
                        <a href="Productos.php" class="nav-link" target="_blank">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>He olvidado mi Contraseña</h3>
                <form action="recuperarcontraseña.php" method="post">

                    <div class="input-box">
                        <div class="icons">
                        <i class="bi bi-question-square-fill"></i>
                        </div>
                        <input type="text" placeholder="Recuerdas tu apodo???" class="input-control" name="NickOlvido"  >
                    </div>
                    <div class="input-box">
                        <div class="input-link">
                            <p> recordaste tu clave?<a href="login.php" class="gradient-text">Inicia sesión</a></p>
                        </div>
                    </div>
                    <button type="submit" class="btm" name="BtnOlvido">Iniciar Sesion</button>
                </form>
                <p>No tienes una cuenta? <a href="registro.php"> Crear cuenta</a></p>
            </div>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
    <?php
    $Nickname=$_POST['NickOlvido'];
    include ("Conexion.php");
    include ("ControladorOlvidoC.php");
     ?>
</html>