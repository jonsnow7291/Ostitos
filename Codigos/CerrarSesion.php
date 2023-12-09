<?php
// cerrar_sesion.php

session_start();
session_destroy();
header("location:Inicio.php");
?>
