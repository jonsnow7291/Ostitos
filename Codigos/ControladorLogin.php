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
                        /*sacamos el id segun el correo contraseña y rol del usuario*/
                        $rutaid ="Select IdUsu from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña'";
                        $Resultid = $conect ->query($rutaid);
                        $fila = $Resultid->fetch_assoc();
                        $IdUsu = $fila['IdUsu'];
                        /*Sacamos la ruta de validacion para el login*/
                        $sql=$conect->query("select * from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña' and RolUsu='$RolUsu'");
                        /*validacion de datos */
                        if($datos = $sql->fetch_object()){
                        /* envio de Usuarios A inicio Segun respectivo rol */
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
                        }else{
                            echo "<center><h5>datos invalidos<h5>
                            <h5>rectificalos<h5><center>";

                        }
                    }
                    
                }
            }
    } 
    else {

    }
?>