<?php
    $Rol = isset($_POST["rol"]) ? $_POST["rol"] : "";
    $Nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $Apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $Edad = isset($_POST["edad"]) ? $_POST["edad"] : "";
    $Apodo = isset($_POST["nickname"]) ? $_POST["nickname"] : "";
    $Email = isset($_POST["email"]) ? $_POST["email"] : "";
    $Telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $Contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : "";
    
    if (isset($_POST["Registro"])) {
        if (!empty($Apellido) && is_numeric($Edad) && ($Edad >= 18) && ($Edad <= 100)) {
            $insertarDatos = "INSERT INTO usuario (RolUsu, NombreUsu, ApellidoUsu, EdadUsu, NicknameUsu, CorreoUsu, TelefonoUsu, ContraseñaUsu) VALUES ('$Rol', '$Nombre', '$Apellido', '$Edad', '$Apodo', '$Email', '$Telefono', '$Contraseña')";
            
            $sql = $conect->query("SELECT * FROM usuario WHERE CorreoUsu = '$Email' AND ContraseñaUsu = '$Contraseña' AND RolUsu = '$Rol'");
            
            if (!$datos = $sql->fetch_object()) {
                $ejecucion = mysqli_query($conect, $insertarDatos);
                header('location: login.php');
            } else {
                echo "<center><h5>Tus datos ya han sido registrados</h5><br><h5>Rectifícalos</h5></center>";
            }
        } else {
            echo "<h5>Error: Verifica que todos los campos estén completos y que la edad sea un número válido (entre 18 y 100).</h5>";
        }
    }
?>