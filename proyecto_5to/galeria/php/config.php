<?php
$ip = "localhost";
$usuario = "root";
$clave = "";
$db_nombre = "infinit";

$conexion = mysqli_connect($ip,$usuario,$clave,$db_nombre);
if (!$conexion) {
    die('No pudo conectarse: ' . mysql_error());
}
?>