<?php
        $Rol =$_POST["rol"];
        $Nombre =$_POST["nombre"];
        $Apellido =$_POST["apellido"];
        $Edad =$_POST["edad"];
        $Apodo =$_POST["nickname"];
        $Email =$_POST["email"];
        $Telefono = $_POST["telefono"];
        $Contraseña =$_POST["contraseña"];
    if(isset($_POST["Registro"])){
        if(($Edad<=100)&&($Edad>=18)){
            /*aqui hacemos el procedimiento para meter nuestros datos*/
            $insertarDatos = ("insert into usuario (RolUsu,NombreUsu,ApellidoUsu,EdadUsu,NicknameUsu,CorreoUsu,TelefonoUsu,ContraseñaUsu) values('$Rol','$Nombre','$Apellido','$Edad','$Apodo','$Email','$Telefono','$Contraseña')");
            $sql=$conect->query("select * from usuario where CorreoUsu='$Email' and ContraseñaUsu ='$Contraseña' and RolUsu='$Rol'");
            if(!$datos =$sql->fetch_object()){
                $ejecucion = mysqli_query($conect,$insertarDatos);
                header('location:login.php');
            }else{
                echo "<center><h5>tus datos ya han sido registrados</h5> <br> <h5>Rectificalos</h5></center>";
            }

        }else{ 
            echo "<h5>EDAD INVALIDA (EDAD VALIDA 18 - 99)</h5>"; 
        }
    }
?>