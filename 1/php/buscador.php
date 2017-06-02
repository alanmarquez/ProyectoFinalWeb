<?php
//error_reporting(0);
	require_once('../conn/conect.php');

	//sleep(1);

	$search = '';
	if (isset($_POST['search'])){
		$search = $_POST['search'];
	}

	//CONSULTA A LA BD
	$consulta = "SELECT * FROM opciones WHERE articulo LIKE  '%".$search."%' OR nombre LIKE '%".$search."%' LIMIT 5;";
	//GUARDAMOS EL RESULTADO DE LA CONSULTA
	$resultado = $connect->query($consulta);
	//OBTENEMOS LA FILA QUE NOS ARROJA COMO RESULTADO LA CONSULTA
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
?>

<?php if ($total > 0 && $search!=''){ ?>
	<h2>Resultados de la búsqueda...</h2>
	<?php do { ?>
		<div class="art">
			<a href="articulo.php?id= <?php echo $fila['id']?> & search=<?php echo $search?>">
				<!--MOSTRAR RESULTADOS DE LA BUSQUEDA-->
				<span class="titulo"><?php echo str_replace($search, "<strong>".$search."</strong>",$fila['nombre']. " - Teléfono: ".$fila['telefono']) ?></span><br>

				<span class="contenido"><?php echo str_replace($search, "<strong>".$search."</strong>",substr($fila['articulo'],0,200)."...") ?></span>
			</a>
		</div>
	<?php } while($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } 
elseif($total > 0 && $search=='') echo '<h2>Ingresa un parámetro de búsqueda</h2> <p>Ingresa palabras clave relacionadas con tu búsqueda</p>';
else echo '<h2>No se encontró ningún resultado</h2> <p>Intenta realizar tu búsqueda con palabras más específicas...</p>';

?>