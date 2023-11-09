<?php
     /*aqui hacemos la conexion a la base de datos  */
     $User = "Diego";
     $Password = "15082004";
     $Serv = "localhost";
     $db = "ostitos";
     $conect = mysqli_connect($Serv,$User,$Password,$db);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
                        <a href="/Codigos/Inicio.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="/Codigos/login.html" class="nav-link">Inicio de Sesion</a>
                        </li>
                        <li class="nav-item">    
                        <a href="/Codigos/carrito.html" class="nav-link" target="_blank">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Bienvenido</h3>
                <form action="registro.php" method="post">
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
                            <i class="bi bi-person-fill"></i>
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
                            <i class="bi bi-person-video2"></i>
                        </div>
                        <input type="Email" placeholder="Correo Usuario" name="email" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-telephone-plus"></i>
                        </div>
                        <input type="text" placeholder="Numero telefonico" name="telefono" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="password" placeholder="Contraseña" name="contraseña" class="input-control" required>    
                    </div>
                    <button type="submit" class="btm"name="Registro" >Registrarse</button>
                </form>
                <p>Ya tienes una cuenta? <a href="/Codigos/login.html"> Inicia sesion</a></p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
    if(isset($_POST["Registro"])){
         /*aqui hacemos el procedimiento para meter nuestros datos*/
        $Rol =$_POST["rol"];
        $Nombre =$_POST["nombre"];
        $Apellido =$_POST["apellido"];
        $Edad =$_POST["edad"];
        $Apodo =$_POST["nickname"];
        $Email =$_POST["email"];
        $Telefono = $_POST["telefono"];
        $Contraseña =$_POST["contraseña"];
        $insertarDatos = ("insert into usuario values('','$Rol','$Nombre','$Apellido','$Edad','$Apodo','$Email','$Telefono','$Contraseña')");
        $ejecucion = mysqli_query($conect,$insertarDatos);
    }
?>