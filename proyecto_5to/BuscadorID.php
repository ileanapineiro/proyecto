<?php
$_GET['ID'] = (isset($_GET['ID'])) ? $_GET['ID'] : "";
?>

<form action="BuscadorID.php" method="GET">
ID: <input name="ID" value="<?php echo $_GET['ID']; ?>">
<input type="submit">
</form>

<?php
require_once "conexion.php";

if(!$enlace){
	exit("Error en conexion: " . mysqli_connect_error());
}

$query = "SELECT * FROM imagenes WHERE ID =" .$_GET['ID'];

		$res = mysqli_query($enlace, $query);

if(!$res){
	exit("Error en consulta: " . mysqli_error($enlace));
}
?>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Imagen</th>
		<th>ID</th>
		<th>Votar</th>
	</tr>
	<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Imagen']; ?></td>
		<td><?php echo $fila['ID']; ?></td>
		<td>me gusta | no me gusta</td>
	</tr>
	<?php } ?>
</table>