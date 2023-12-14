<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuarios</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/login.css">
</head>
            <?php
                session_start();
                if($_SESSION['IdUsu']){
                include('../Conexion.php');
                $IdUsu=$_GET['IdUsu'];
                $ruta=("select * from usuario where IdUsu='".$IdUsu."'");
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
                        <a href="../InicioAdmin.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Admin.php" class="nav-link">Funciones Admin</a>
                    </li>
                    <li class="nav-item">    
                        <a href="ListaUsuariosNueva.php" class="nav-link" >Lista de Usuarios</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a href="../CerrarSesion.php" class="nav-link">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Modifica tus Registros</h3>
                <form action="EditarUsuarios.php"  method="post">
                    <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                    <div class="input-box">
                        <input type="hidden" value="<?php echo $fila['IdUsu']?>" class="input-control" name="IdNuevo" >
                    </div>
                    <div class="input-box">
                        <input type="hidden" value="<?php echo $fila['RolUsu']?>" class="input-control" name="RolNuevo" >
                    </div>
                    <div class="input-box">
                        <input type="text" value="<?php echo $fila['NombreUsu']?>" class="input-control" name="NombreNuevo" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['ApellidoUsu']?>" class="input-control" name="ApellidoNuevo" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['EdadUsu']?>" class="input-control" name="EdadNueva" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['NicknameUsu']?>" class="input-control" name="NicknameNuevo" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['TelefonoUsu']?>" class="input-control" name="TelefonoNuevo" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['CorreoUsu']?>" class="input-control" name="CorreoNuevo" >
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        <input type="text" value="<?php echo $fila['ContraseñaUsu']?>" class="input-control" name="ContraNueva" >
                        <div>
                        </div>
                    </div>
                    <button type="submit" class="btm" name="BtnMod" >renovar</button>
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
    $IdNu=$_POST['IdNuevo'];
    $RolNu=$_POST['RolNuevo'];
    $NombreNu=$_POST['NombreNuevo'];
    $ApellidoNu=$_POST['ApellidoNuevo'];
    $EdadNu=$_POST['EdadNueva'];
    $NicknameNu=$_POST['NicknameNuevo'];    
    $TelefonoNu=$_POST['TelefonoNuevo'];    
    $CorreoNu=$_POST['CorreoNuevo'];    
    $ContraNu=$_POST['ContraNueva'];
    if(isset($_POST["BtnMod"])){ 
        if($NombreNu!=null||$ApellidoNu!=null||$EdadNu!=null||$NicknameNu!=null||$TelefonoNu!=null||$CorreoNu!=null||$ContraNu!=null){
            $modificar="update usuario set NombreUsu ='".$NombreNu."',ApellidoUsu ='".$ApellidoNu."',EdadUsu =".$EdadNu." , NicknameUsu ='".$NicknameNu."', TelefonoUsu =".$TelefonoNu.", CorreoUsu ='".$CorreoNu."', ContraseñaUsu ='".$ContraNu."' where IdUsu =".$IdNu."";
            if (mysqli_query($conect,$modificar)) {
                header("Location:ListaUsuariosNueva.php");
            } else {
                 echo"Error".mysqli_error($conect);
            }
    }
}
                }else{
                    header("location:Errores/Error_404.html");
                } 
?>
