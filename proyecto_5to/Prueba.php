<?php
require_once "conexion.php";

//Sino existe la variable la declaro como vacio ""
$_GET['Name'] = (isset($_GET['Name'])) ? $_GET['Name'] : "";

$sql = "SELECT * FROM country
		WHERE Name LIKE '%" . $_GET['Name'] ."%'
		";
$res = mysqli_query($enlace,$sql);
if(!$res){
	die("Error en la consulta: " . mysqli_error($enlace));
}

require_once "menu.php";
?>
<hr>
<h1>Listado Clientes</h1>
<form action="Prueba.php" method="GET">
	Cliente: <input type="text" name="Name" value="<?php echo $_GET['Name']; ?>"> 
	<input type="submit">
</form>
<hr>
<table border="1">
	<tr>
		<th>Accion</th>
	</tr>
<?php while($fila = mysqli_fetch_assoc($res)){ ?>
	<tr>
		<td><?php echo $fila['Name']; ?></td>
	</tr>
<?php } ?>
</table>
<?php
mysqli_close($enlace);
require_once "footer.php";