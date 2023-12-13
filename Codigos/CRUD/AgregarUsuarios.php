<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    session_start();
    if($_SESSION['IdUsu']){
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuarios</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Registro.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/Codigos/InicioAdmin.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">    
                        <a href="../Admin.php" class="nav-link">Funciones Admin</a>
                    </li>
                    <li class="nav-item">    
                        <a href="../CRUD/ListaUsuariosNueva.php" class="nav-link">Lista Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a href="../CerrarSesion.php" class="nav-link">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Ingresa Nuevos Registros</h3>
                <form action="AgregarUsuarios.php" method="post">
                <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="number" min="1" max="3" placeholder="Rol Usuario" name="rol" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <input type="text" placeholder="Primer Nombre" name="nombre" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-square"></i>
                        </div>
                        <input type="text" placeholder="Primer apellido" name="apellido" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="number" placeholder="Edad" name="edad" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-video2"></i>
                        </div>
                        <input type="text" placeholder="Nombre de usuario" name="nickname" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <input type="Email" placeholder="Correo Usuario" name="email" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-telephone-plus"></i>
                        </div>
                        <input type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" placeholder="Numero telefonico" name="telefono" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="password" placeholder="Contraseña" name="contraseña" class="input-control" required>    
                    </div>
                    <div>
                        <?php
                        include("../Conexion.php");
                        include("../CRUD/ControAgregar.php");
                        ?>
                    </div>
                    <button type="submit" class="btm"name="Registro" >Registrarse</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <?php }else{ header("location:/Codigos/Errores/Error_404.html");

    }?>
</body>
</html>
