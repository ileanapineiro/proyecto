
<?php
//constantes, variables que no se pueden modificar

define ('SERVER','localhost');
define ('USERR','root');
define ('PAS','');
define ('DB','teruel2');



//conn guarda los datos almacenados para acceder a la base de datos
//en la variable se guarda la conexion 

$conn = mysqli_connect(SERVER, USERR, PAS, DB);

// mysqli_connect_error devuelve codigo de error

if(!$conn){
	exit("Error en conexion: " . mysqli_connect_error());
}


function consulta($conn, $sql){
	$res = mysqli_query($conn, $sql);

//Hubo un error en la ejecucion del quer


	if(!$res){
		exit("Error en consulta: " . mysqli_error($conn));
	}
	
	return $res;
}
?>