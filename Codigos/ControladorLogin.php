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
                        $rutaid ="Select IdUsu from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña'";
                        $Resultid = $conect ->query($rutaid);
                        /* envio de Usuarios A inicio Segun respectivo rol */
                        $fila = $Resultid->fetch_assoc();
                        $IdUsu = $fila['IdUsu'];
                        switch($RolUsu){
                            case 1:
                                header("location:InicioAdmin.php?IdUsu='$IdUsu'");
                            break;
                            case 2:
                                header("location:InicioCliente.php?IdUsu='$IdUsu'");
                            break;
                            case 3:
                                header("location:InicioAdmin.php?IdUsu='$IdUsu'");
                            break;
                            default:
                                    echo "Rol invalido  
                                    <br> roles validos:<br>
                                     1Admin 2Cliente 3Empleado";
                            break;
                        }
                    }
                    
                }
            }
    } 
    else {

    }
?>