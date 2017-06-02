<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("paginas/conexion.php");

if(isset($_POST['registrar']))
{
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['articulo']) && !empty($_POST['articulo'])&&
	isset($_POST['telefono']) && !empty($_POST['telefono']))
	{
		$nombre = $_POST['nombre'];
		$articulo = $_POST['articulo'];
		$telefono = $_POST['telefono'];
	

		$conexion->query("insert into opciones(nombre, articulo, telefono) VALUES('$nombre', '$articulo', '$telefono')");

		/*$sentencia = $conexion->prepare("INSERT INTO productos (Nombre, Proveedor, Tamaño, Color) VALUES (:nombre, :proveedor, :tamaño, :color)"); //Se declara la sentencia SQL
		$sentencia->bindParam(':nombre', $nombre); //Se definen los datos a enviar a MySQL
		$sentencia->bindParam(':proveedor', $proveedor);
		$sentencia->bindParam(':tamaño', $tamaño);
		$sentencia->bindParam(':color',$color);
 
		$sentencia->execute(); //Se ejecuta la sentencia

		$conexion = null; //Se cierra la conexion a la bd*/
		
		echo "<p style='color:green;'>INSERCION REALIZADA CON EXITO</p>";
	}
	else
	{
		
	}
}
?>
<form name="formulario" method="post" action="">
     
    <input placeholder="Nombre" type="text" name="nombre" maxlength="30" size="40"><br><br>
    
    <input placeholder="Descripcion" type="text" name="articulo" maxlength="30" size="40"><br><br>
	
	<input placeholder="Telefono" type="text" name="telefono" maxlength="30" size="40"><br><br>
    
    <input  type="submit"  value="Registrar" name="registrar">
    
</form>
<br />
<a href="index.php">Regresar</a>

</body>
</html>