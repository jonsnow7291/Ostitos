<?php
$User = "Diego";
$Password = "15082004";
$Serv = "localhost";
$db = "ostitos";

$conect = mysqli_connect($Serv, $User, $Password, $db);


/* if (!$conect) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else{
    echo "Conexion exitosa";
}

mysqli_close($conect);
?>*/
