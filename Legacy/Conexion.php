<?php
    $User = "root";
    $Password = "";
    $Serv = "localhost";
    $db = "ostitos";

    $conect = mysqli_connect(hostname: $Serv, username: $User, password: $Password, database: $db);


    /* if (!$conect) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    else{
        echo "Conexion exitosa";
    }

    mysqli_close($conect);
    */
?>
