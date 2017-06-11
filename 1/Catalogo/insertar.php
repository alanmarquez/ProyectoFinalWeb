<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">
</head>
<body background="../images/wood_1.png">

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

<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p><img src="../images/bannerup.jpg" width="955" height="147"></p></td>
  </tr>
</table>
  <tr>
    <td width="18"><p>&nbsp;</p>

        <table width="315" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><p>&nbsp;<br>
                    <img src="../images/registro.jpg"  width="599" height="30">

<form name="formulario" method="post" action="">
     
    <input placeholder="Nombre" type="text" name="nombre" size="60"><br><br>
    
    <!--<input placeholder="Descripcion" type="text" name="articulo" size="40"><br><br>-->
    <textarea placeholder="Descripcion" name="articulo" rows="10" cols="50"></textarea><br><br>
	
	<input placeholder="Telefono" type="text" name="telefono" size="40"><br><br>
    
    <input  type="submit"  value="Registrar" name="registrar">
    
</form>
<br />
<a href="../index.php"><font color="white"><font size=4> Regresar</font></font></a>

</body>
</html>