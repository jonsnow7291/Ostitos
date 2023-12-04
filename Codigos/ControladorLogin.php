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
                    if (empty($_POST["RolUsu"])) {
                        echo "Rol No valido ";
                    } else {
                        $Email=$_POST["Correo"];
                        $Contraseña=$_POST["Contraseña"];
                        $RolUsu=$_POST["RolUsu"];
                        $sql=$conect->query("select * from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña' and RolUsu='$RolUsu'");
                        if($datos=$sql->fetch_object()){
                            if ($RolUsu==1) {
                                header("location:InicioAdmin.html");
                            } elseif($RolUsu==2) {
                                header("location:InicioTrabajador.html");
                            }elseif($RolUsu==3){
                                header("location:InicioTrabajador.html");
                            }
                        }else{
                            echo "<h5>Datos incorrectos</h5>";
                        }
                    }
                    
                }
            }
    } 
    else {

    }
?>