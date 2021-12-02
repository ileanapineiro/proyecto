<?php
//constantes, variables que no se pueden modificar

define ('SERVER','localhost');
define ('USERR','root');
define ('PAS','');
define ('DB','teruel2');



//conn guarda los datos almacenados para acceder a la base de datos


$conn = mysqli_connect(SERVER, USERR, PAS, DB);

if(!$conn){
	exit("Error en conexion: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

function consulta($conn, $sql){
	$res = mysqli_query($conn, $sql);

	if(!$res){
		exit("Error en consulta: " . mysqli_error($conn));
	}
	
	return $res;
}
?>