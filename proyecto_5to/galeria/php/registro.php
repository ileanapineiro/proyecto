<?php
require("config.php");

if(!$_POST['usuario']||$_POST['usuario']===""){
    die("error");
}
if(!$_POST['clave']||$_POST['clave']===""){
    die("error");
}


$query = "INSERT INTO usuarios VALUES (null,'".$_POST['usuario']."','".$_POST['clave']."')";

if (mysqli_query($conexion,$query) === TRUE) {
    printf("ok");
}else{
    die(mysqli_error($conexion));
}
?>