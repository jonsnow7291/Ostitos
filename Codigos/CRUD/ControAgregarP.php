<?php
$Nombre = $_POST["Nombre"];
$Serial = $_POST["Serial"];
$Marca = $_POST["Marca"];
$Carac = $_POST["Caracteristicas"];
$Resumen = $_POST["Resumen"];
$Modelo = $_POST["Modelo"];
$Precio = $_POST["Precio"];
$UniDis = $_POST["Uni"];
$Enlace = $_POST["Link"];
if(isset($_POST["BtnIngreso"])){
        /*aqui hacemos el procedimiento para meter nuestros datos*/
        $insertarDatos = ("insert into producto (NombrePro,SerialPro,MarcaPro,CaracteristicasPro,ResumenPro,ModeloPro,PrecioPro,UniDispoPro,linkProducto) values('$Nombre',$Serial,'$Marca','$Carac','$Resumen','$Modelo',$Precio,$UniDis,'$Enlace')");
        $sql=$conect->query("select * from Producto where NombrePro='$Nombre' and SerialPro =$Serial and linkProducto ='$Enlace'");
        if(!$datos = $sql->fetch_object()){
            $ejecucion=mysqli_query($conect,$insertarDatos);
            if($ejecucion){
                header("location:ListaProductos.php");
            }else{
                echo"error".mysqli_error($conect);
            }
        }else{
            echo "<center><h5>Este producto ya ha sido ingresado</h5></center>";
        }

}
?>