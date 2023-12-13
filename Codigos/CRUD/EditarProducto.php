<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar productos</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Registro.css">
</head>
<?php
    session_start();
    if($_SESSION["IdUsu"]){
    include("../Conexion.php");
    $IdPro=$_GET['IdPro'];
    $ruta="select * from  producto where IdPro=".$IdPro;
    $resul=mysqli_query($conect,$ruta);
    while($fila=mysqli_fetch_assoc($resul)){
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos</a>
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
    <section class="form-main">
        <div class="form-content">
            <div class="box">
                <h3>Modificar producto</h3>
                <form action="/Codigos/CRUD/EditarProducto.php" method="post">
                    <div class="input-box">
                        <input type="hidden" value="<?php echo $fila["IdPro"]?>" name="Id" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-speaker-fill"></i>
                            <h6>Nombre</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["NombrePro"]?>" name="Nombre" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-upc"></i>
                            <h6>Serial</h6>
                        </div>
                        <input type="number" value="<?php echo $fila["SerialPro"]?>" name="Serial" class="input-control" required readonly>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-bookmark-check"></i>
                            <h6>Marca</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["MarcaPro"]?>" name="Marca" class="input-control" required>    
                    </div>
                    
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-tags-fill"></i>
                            <h6>Caracteristicas</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["CaracteristicasPro"]?>" name="Caracteristica" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-cpu"></i>
                            <h6>resumen</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["ResumenPro"]?>" name="Resumen" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-badge-tm"></i>

                            <h6>Modelo</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["ModeloPro"]?>" name="Modelo" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-cash-coin"></i>
                            <h6>Precio</h6>
                        </div>
                        <input type="Number" value="<?php echo $fila["PrecioPro"]?>" name="Precio" class="input-control" required>    
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-123"></i>
                            <h6>Unidades disponibles</h6>
                        </div>
                        <input type="text" value="<?php echo $fila["UniDispoPro"]?>" name="Uni" class="input-control" required>  
                    </div>
                    <div class="input-box">
                        <div class="icons">
                            <i class="bi bi-chat-left-text-fill"></i>
                        </div>
                        <input type="Text" value="<?php echo $fila["linkProducto"]?>" name="Link" class="input-control" required>    
                    </div>
                    <button type="submit" class="btm" name="BtnMod" >Confirmar edicion del producto</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
<?php 

            $Id=$_POST["Id"];
            $Nombre=$_POST["Nombre"];
            $Serial=$_POST["Serial"];
            $Marca=$_POST["Marca"];
            $Carac=$_POST["Caracteristica"];
            $Resumen=$_POST["Resumen"];
            $Modelo=$_POST["Modelo"];
            $Precio=$_POST["Precio"];
            $UniDisPro=$_POST["Uni"];
            $Enlace=$_POST["Link"];
            if(isset($_POST["BtnMod"])){
                if($Nombre!=null||$Serial!=null||$Marca!=null||$Carac!=null||$Resumen!=null||$Modelo!=null||$Precio!=null||$UniDisPro!=null||$Enlace!=null){
                    $modificar="update producto set NombrePro ='".$Nombre."',SerialPro =".$Serial.",MarcaPro ='".$Marca."' , CaracteristicasPro ='".$Carac."', ResumenPro ='".$Resumen."', ModeloPro ='".$Modelo."', PrecioPro =".$Precio.", UniDispoPro =".$UniDisPro.",linkProducto =".$Enlace." where IdUsu =".$Id."";
                    if(mysqli_query($conect,$modificar)){
                        header("location:ListaProductos.php");
                    }else{
                        echo "<h1>Error al realizar la actualización: " . mysqli_error($conect)."</h1>";

                    }

                }
        }
    
                }else{
                    header("location:../Errores/Error_404.html");
    
                }
?>