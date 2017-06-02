<?php
ob_start();
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
                <td>
                	<form method="post" action="">
                    	<input type="submit" value="Eliminar" name="eliminar" />
                    </form>
                </td>
			  </tr>
<?php
			
			
		}
		
		
if(isset($_POST['eliminar'])){
		$conexion->query("DELETE FROM opciones WHERE id = '$id'");
		
		header('refresh: 1; url=eliminar.php');
		
		echo "<p style='color:red;'>ELIMINACION REALIZADA CON EXITO</p>";
}


?>
</table>
<br />
<a href="index.php">Regresar</a>

</body>
</html>