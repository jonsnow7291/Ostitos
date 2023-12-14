<?php
include('../Conexion.php');
    $IdPro=$_GET['IdPro'];
    $Ruta="delete from producto where IdPro=".$IdPro;
    $resultado= mysqli_query($conect,$Ruta);
        header("Location:ListaProductos.php");
?>