<?php
    if (isset($_POST["btnlog"])) {
            if (empty($_POST["Correo"])) {
                echo "<h5>Correo No diligenciado</h5>";
            } 
            else {
                if(empty($_POST["Contraseña"])){
                    echo "<h5>Contraseña No diligenciada</h5>";
                }
                else{
                    $Email=$_POST["Correo"];
                    $Contraseña=$_POST["Contraseña"];
                    $sql=$conect->query("select * from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña' ");
                    if($datos=$sql->fetch_object()){
                        header("location:Inicio.HTML");
                    }
                    else{
                        echo "ACCESO DENEGADO";
                    }
                }
            }
    } 
    else {

    }
?>