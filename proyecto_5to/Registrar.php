<?php
require "conexion1.php";

//se recibe los datos z se guardan en las variables

//recibe los datos y los almacena en variables 

$User = $_POST ['user'];
$clave = $_POST ['pas'];
$email = $_POST ['email'];

//Consulta para insertar

$insertar = "INSERT INTO personass VALUES ('$User','$clave','$email')";

//ejecutar consulta

//conn guarda los datos almacenados para acceder a la base de datos

//Ejecuta la consulta

$resul = mysql_query( $conn, $insertar);

if ($resul){
	echo'correcto';
	location.href = '../html1.html';
	}
	}
	else{
	echo 'usuario registrado de forma correcta'; 
}

mysql_close ($conn);

?>




