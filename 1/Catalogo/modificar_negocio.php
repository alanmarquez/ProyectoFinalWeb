<?php
ob_start();
include("paginas/conexion.php");
$ID = $_GET["id"];

$consultas = $conexion->query("SELECT * FROM opciones WHERE id='".$ID."'");

		//while($filax = mysqli_fetch_assoc($consultas))
		foreach($consultas as $filax)
		{	
			/*$nombre=$filax['Nombre'];
			$proveedor=$filax['Proveedor'];
			$tamaño=$filax['Tamaño'];
			$color=$filax['Color'];*/
			$nombre=$filax[1];
			$articulo=$filax[2];
			$telefono = $filax[3];
		}
		
if(isset($_POST['modificar']))
{
	if(isset($_POST['nombre2']) && !empty($_POST['nombre2']) &&
	isset($_POST['articulo2']) && !empty($_POST['articulo2'])&&
	isset($_POST['telefono2']) && !empty($_POST['telefono2']))
	{
		$nombre2 = $_POST['nombre2'];
		$articulo2 = $_POST['articulo2'];
		$telefono2 = $_POST['telefono2'];
		
		$conexion->query("UPDATE opciones SET nombre = '$nombre2', articulo = '$articulo2', telefono='$telefono2' WHERE id = '$ID'");
		
		header('refresh: 1; url=modificar.php');
		
		echo "<p style='color:green;'>MODIFICACION REALIZADA CON EXITO</p>";
	}
	else
	{
		echo "error";
	}
}
?>

<form name="formulario" method="post" action="">

	<h3>Nombre: 
	<input placeholder="" type="text" name="nombre2" value="<?php echo $nombre;?>" maxlength="30" size="40"></h3>
    
	<h3>Descripcion:
    <input placeholder="" type="text" name="articulo2" value="<?php echo $articulo;?>" maxlength="30" size="40"></h3>
	
	<h3>Telefono:
	<input placeholder="" type="text" name="telefono2" value="<?php echo $telefono;?>" maxlength="30" size="40"></h3>
    
    <input  type="submit"  value="Modificar" name="modificar">
    
</form>
<br />
<a href="modificar.php">Regresar</a>

</body>
</html>