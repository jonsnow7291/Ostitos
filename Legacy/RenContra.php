<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renueva Tu Contraseña</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
</head>
            <?php
                include('Conexion.php');
                $IdUsu=$_GET['IdUsu'];
                $ruta=("select *from usuario where IdUsu='".$IdUsu."'");
                $resul=mysqli_query($conect,$ruta);
                while($fila = mysqli_fetch_assoc($resul)){
            ?>
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
                <h3>Renueva tu contraseña</h3>
                <form action="Rencontra.php"  method="post">
                    <div class="input-box">
                            <input type="hidden" value="<?php echo $fila['IdUsu']?>" class="input-control" name="IdNu" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        <input type="password" value="<?php echo $fila['ContraseñaUsu']?>" class="input-control" name="ContraNueva" >
                        <div>
                        </div>
                        <div class="input-link">
                            <p>recuerdas tu contraseña?? <br><a href="login.php" class="gradient-text">Incia Sesión</a></p>
                        </div>
                    </div>
                    <button type="submit" class="btm" name="btnRen" >renovar</button>
                </form>
            <?php }?>
            </div>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
    $ContraNu=$_POST['ContraNueva'];
    $IdNu=$_POST['IdNu'];
    if($ContraNu!=null){
        $modificar="update usuario set ContraseñaUsu ='".$ContraNu."' where IdUsu ='".$IdNu."'";
        if (mysqli_query($conect,$modificar)) {
            header("location:login.php"); 
            
        } else {
             echo"Error";
        }
    } 
?>
