<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G11</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/estilosp.css">
</head>
                <!--aqui empieza el codigo de  el xt95-->
                <?php
                        session_start();
                        if($_SESSION['IdUsu']){
                        include ("../Conexion.php");
                        $rutaUsu="select * from usuario where IdUsu = ".$_SESSION['IdUsu'];
                        $resultadoUsu= mysqli_query($conect,$rutaUsu);
                        $FilaUsu=$resultadoUsu->fetch_assoc();
                        $NombreUsu=$FilaUsu['NombreUsu'];
                        $Rol=$FilaUsu['RolUsu'];
                        $RutaP = "select * from fichas_productos where Id = 7 ";
                        $resultadoP = $conect->query($RutaP);
                        $fila = $resultadoP->fetch_assoc();
                        $Nombre = $fila["Nombre"];
                        $Carac = $fila["Caracteristicas"];
                        $Imagen = $fila["Imagen"];
                        $Imagen3 = $fila["Imagen3"];
                        $Imagen4 = $fila["Imagen4"];
                        $Imagen5 = $fila["Imagen5"];
                        $Imagen6 = $fila["Imagen6"];
                        $Imagen7 = $fila["Imagen7"];
                    ?>
                <!--aqui Termina el codigo de  el xt95-->
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-gradient fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php
                        if($Rol==2){
                            echo "<a href='/Codigos/InicioCliente.php' class='nav-link'>Inicio Cliente</a>";
                        }elseif($Rol==1){
                            echo "<a href='/Codigos/InicioAdmin.php' class='nav-link'>Inicio Admin</a>";
                        }
                        ?>
                    </li>
                    <li class="nav-item">    
                        <a href="/Codigos/Productos.php" class="nav-link" target="_blank">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="col-lg-4 col-md-12 col-12">
            <div class="img-area mb-4">
            <img <?php echo'class="img" class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($Imagen).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
            </div>
            <div class="todas-img">
                <div class="">
                <img <?php echo'class="imagenes-pequeñas" src="data:image/jpeg;base64,'.base64_encode($Imagen3).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                </div>
                <img <?php echo'class="img-1" src="data:image/jpeg;base64,'.base64_encode($Imagen4).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-2" src="data:image/jpeg;base64,'.base64_encode($Imagen5).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-3" src="data:image/jpeg;base64,'.base64_encode($Imagen6).'" alt="Imagen del Producto" class="d-bock w-100"'?>>
                <img <?php echo'class="img-4" src="data:image/jpeg;base64,'.base64_encode($Imagen7).'" alt="Imagen del Producto" class="d-bock w-100"'?>>            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="text-black" class="text">
                <h2 class="text"><?php echo "$Nombre";?><br> lo ultimo en innovacion </h2>
                <p class="text1">
                <?php echo "$Carac";?><br>
                <h4 class="text1">Unidades Disponibles:</h4>
                <h5 class="text1">
                    <?php echo $fila['Unidades']?>
                </h5><br>
                <h4 class="text1">Precio:</h4>
                <h5 class="text1">
                    <?php echo $fila['Precio']?>
                </h5>
                </p>
                <div class="boton">
                                       <a target="_blank" href="https://api.whatsapp.com/send?phone=+573213994319&text=Hola%20Mi%20Id%20es%20<?php echo $IdUsu?>%20Mi%20Nombre%20es:%20<?php echo $NombreUsu?>%20<?php echo $Rol?>%20de%20ostitosestoy%20interesad@%20en%20el%20producto:%20<?php echo $Nombre ?>%20el%20cual%20aparece%20en%20este%20momento%20en%20la%20pagina%20ostitos%20por%20el%20siguiente%20precio%20<?php echo $fila['Precio']?>%20me%20podrian%20dar%20mas%20detalles%20respecto%20a%20este???" class="btn btn-primary"><i class="bi bi-bag-check-fill"></i>Cotizar</a>
                </div>    
            </div>
        </div>  
    </section>
    <body>
        <footer class="bg-black text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                <hr class="mb-4">
                <p>
En "Ostitos", nos apasiona brindar una experiencia auditiva excepcional. Ya sea que estés buscando la potencia de bajos profundos, la claridad de tonos altos o la comodidad durante todo el día, tenemos el audífono perfecto para ti.
<br>
¿Tienes preguntas, comentarios o necesitas asistencia personalizada? Estamos aquí para ayudarte. ¡Contáctanos y deja que nuestro equipo experto te guíe hacia el audífono ideal para satisfacer tus necesidades auditivas!
                </p>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">CONTACTANOS</h5>
                    <hr class="mb-4">
                    <a href="https://maps.app.goo.gl/vXkYKtG5JYkdGMoNA"><i class="bi bi-house-door-fill"></i> PUNTO FISICO</a><br>
                    <a href="+57 310 3143832"><i class="bi bi-telephone-fill"></i> TELEFONO</a><br>
                    <a href="#"><i class="bi bi-envelope-fill"></i> CORREO</a><br>
                    <a href="#"><i class="bi bi-messenger"></i> MESSENGER</a>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary"> REDES SOCIALES</h5>
                    <hr class="mb-4">
                    <a href="https://maps.app.goo.gl/vXkYKtG5JYkdGMoNA"><i class="bi bi-facebook"></i> FACEBOOK</a><br>
                    <a href="+57 310 3143832"><i class="bi bi-instagram"></i> INSTAGRAM</a><br>
                    <a href="#"><i class="bi bi-tiktok"></i> TIKTOK</a><br>
                    <a href="#"><i class="bi bi-whatsapp"></i> WHATSAPP</a><br>
                </div>

            </div>
        </div>
    </footer>
        </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
<?php }?>
</html>