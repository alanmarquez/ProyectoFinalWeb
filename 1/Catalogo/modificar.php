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

		$consulta = $conexion->query("SELECT * FROM opciones");
		
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
                    <img src="../images/modificacion.jpg"  width="599" height="30">
			<table width="100%" border="1">
            <tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>DESCRIPCION</td>
				<td>TELEFONO</td>
			  </tr>
<?php
		//while($filas = mysqli_fetch_assoc($consulta))
		foreach($consulta as $filas)
		{	
			/*$id= $filas['Id_Producto'];
			$nombre=$filas['Nombre'];
			$proveedor=$filas['Proveedor'];
			$tamaño = $filas['Tamaño'];
			$color = $filas['Color'];*/
			$id= $filas[0];
			$nombre=$filas[1];
			$articulo=$filas[2];
			$telefono = $filas[3];
			
?>
			  <tr>
				<td><?php echo "<p style='color:#ffff;'>".$id."</p>";?></td>
				<td><?php echo "<p style='color:#ffff;'>".$nombre."</p>";?></td>
				<td><?php echo "<p style='color:#ffff;'>".$articulo."</p>";?></td>
				<td><?php echo "<p style='color:#ffff;'>".$telefono."</p>";?></td>
                <td><a href="modificar_negocio.php?id=<?php echo $id;?>"<font color="white"><font size=4>Modificar</a></td>
			  </tr>
<?php
			
			
		}


?>
</table>
<br />
<a href="../index.php"><font color="white"><font size=4> Regresar</font></font></a>
</body>
</html>