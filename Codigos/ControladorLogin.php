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
                        /*sacamos el id segun el correo y contraseña del usuario*/
                        $Resultid = $conect ->query("Select IdUsu, RolUsu from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña'");
                        $fila = $Resultid->fetch_assoc();
                        $IdUsu = $fila['IdUsu'];
                        $RolUsu = $fila ['RolUsu'];
                        /*Sacamos la ruta de validacion para el login*/
                        $sql=$conect->query("select * from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña'");
                        /*validacion de datos */
                        if($datos = $sql->fetch_object()){
                        /* envio de Usuarios A inicio Segun respectivo rol */
                            switch($RolUsu){
                                case 1:
                                    session_start();
                                    $_SESSION['IdUsu'] = $IdUsu;
                                    $_SESSION['RolUsu'] = $RolUsu;
                                    header("location:InicioAdmin.php");
                                break;
                                case 2:
                                    session_start();
                                    $_SESSION['IdUsu'] = $IdUsu;
                                    $_SESSION['RolUsu'] = $RolUsu;
                                    header("location:InicioCliente.php");
                                break;
                                case 3:
                                    session_start();
                                    $_SESSION['IdUsu'] = $IdUsu;
                                    $_SESSION['RolUsu'] = $RolUsu;
                                    header("location:InicioTrabajador.php");
                                break;
                                default:
                                        echo "Rol invalido  
                                         roles validos:
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
    
    else {

    }
?>