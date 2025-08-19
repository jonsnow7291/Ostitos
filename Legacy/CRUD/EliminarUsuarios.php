<?php
include('../Conexion.php');
    $IdUsu=$_GET['IdUsu'];
    $Ruta="delete from usuario where IdUsu=".$IdUsu;
    $resultado= mysqli_query($conect,$Ruta);
        header("Location:ListaUsuariosNueva.php");
?>