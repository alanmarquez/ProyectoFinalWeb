<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
</head>
<body>

<?php
include("paginas/conexion.php");

		$consulta = $conexion->query("SELECT * FROM opciones");
		
?>

			<table width="40%" border="1">
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
				<td><?php echo "<p style='color:#000;'>".$id."</p>";?></td>
				<td><?php echo "<p style='color:#000;'>".$nombre."</p>";?></td>
				<td><?php echo "<p style='color:#000;'>".$articulo."</p>";?></td>
				<td><?php echo "<p style='color:#000;'>".$telefono."</p>";?></td>
                <td><a href="modificar_negocio.php?id=<?php echo $id;?>">Modificar</a></td>
			  </tr>
<?php
			
			
		}


?>
</table>
<br />
<a href="index.php">Regresar</a>

</body>
</html>