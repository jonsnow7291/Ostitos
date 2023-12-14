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
                <h3>Ingresa Nuevos Productos</h3>
                <form action="AgregarUsuarios.php" method="post">
                <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text"placeholder="Nombre" name="Nombre" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <input type="number" placeholder="Serial" name="Serial" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-square"></i>
                        </div>
                        <input type="text" placeholder="Marca" name="Marca" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="text" placeholder="Caracteristicas" name="Caracteristicas" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-video2"></i>
                        </div>
                        <input type="text" placeholder="Resumen" name="Resumen" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <input type="text" placeholder="Modelo" name="Modelo" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-telephone-plus"></i>
                        </div>
                        <input type="number"placeholder="Precio" name="Precio" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="number" placeholder="Unidades Disponibles" name="Uni" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="text" placeholder="Enlace a ficha" name="Link" class="input-control" required>    
                    </div>
                    <div>
                        <?php
                        include("../Conexion.php");
                        $Nombre = $_POST["Nombre"];
                        $Serial = $_POST["Serial"];
                        $Marca = $_POST["Marca"];
                        $Carac = $_POST["Caracteristicas"];
                        $Resumen = $_POST["Resumen"];
                        $Modelo = $_POST["Modelo"];
                        $Precio = $_POST["Precio"];
                        $UniDis = $_POST["Uni"];
                        $Enlace = $_POST["Link"];
                        if(isset($_POST["BtnIngreso"])){
                                /*aqui hacemos el procedimiento para meter nuestros datos*/
                                $insertarDatos = ("insert into producto (NombrePro,SerialPro,MarcaPro,MarcaPro,CaracteristicasPro,ResumenPro,ModeloPro,PrecioPro,UniDipoPro,linkProducto) values('$Nombre','$Serial','$Marca','$Carac','$Resumen','$Modelo','$Precio','$UniDis','$Enlace')");
                                $sql=$conect->query("select * from Producto where NombrePro='$Nombre' and SerialPro =$Serial and linkProducto ='$Enlace' and MarcaPro='$Marca'");
                                if(!$datos = $sql->fetch_object()){
                                    $ejecucion = mysqli_query($conect,$insertarDatos);
                                    echo "<center><h4>Datos Registrados</h4></center>";
                                    header("location:ListaUsuariosNueva.php");
                                }else{
                                    echo "<center><h5>Este producto ya ha sido ingresado</h5></center>";
                                }
                            

                        }
                        ?>
                    </div>
                    <button type="submit" class="btm"name="BtnIngreso" >Registrarse</button>
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
