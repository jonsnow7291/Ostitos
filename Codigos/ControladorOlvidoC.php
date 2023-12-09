<?php
$Resultid = $conect ->query("Select IdUsu from usuario where NicknameUsu='$Nickname'");
$fila= $Resultid->fetch_assoc();
$IdUsu=$fila['IdUsu'];
$SqlOlvido=$conect->query("select * from usuario where NicknameUsu='$Nickname'");

                        /*validacion de datos */
                    if(isset($_POST['BtnOlvido'])){
                        if($DatosOlvido = $SqlOlvido->fetch_object()){
                            /* envio de Usuarios A inicio Segun respectivo rol */
                            header('location:RenContra.php?IdUsu='.$IdUsu.'');
                        }else{
                            echo "<center><h5>dato invalido<h5>
                            <h5>rectificalos<h5><center>";
                        }
                        }
                        ?>