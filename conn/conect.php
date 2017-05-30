<?php
    // Datos de la base de datos.
    $host="localhost";
    $user="root";
    $pass="123456";	
    $db="proyecto_final";

    $connect = new mysqli($host,$user,$pass,$db) or die ("error" . mysqli_errno($connect));
?>