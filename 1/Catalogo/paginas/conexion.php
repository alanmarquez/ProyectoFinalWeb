<?php
// datos para la coneccion a mysql 
$hostdb= "localhost";
$userdb= "root";
$passdb= "";
$db= "proyecto_final";

//Realizamos la conexion
//$conexion = new mysqli($hostdb,$userdb,$passdb,$db) or die ("error" . mysqli_errno($conexion));
$conexion = new PDO('mysql:host=localhost;dbname=proyecto_final', $userdb, $passdb);

//Estructura de control por si falla
//if(!$conexion)
//{
//die("No he podido conectar porque: ".mysql_error());
//}
//Seleccion la base de datos
//mysql_select_db($db,$conexion);

?>