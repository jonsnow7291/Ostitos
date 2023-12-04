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
                            if($datos=$sql->fetch_object()){
                                if ($RolUsu==1) {
                                    header("location:InicioAdmin.php?IdUsu='$IdUsu'");
                                } elseif($RolUsu==2) {
                                    header("location:InicioCliente.php?IdUsu='$IdUsu'");
                                }elseif($RolUsu==3){
                                    header("location:InicioAdminTrabajador.php?IdUsu='$IdUsu'");
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