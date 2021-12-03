<?php
require("config.php");

if(!$_POST['usuario']||$_POST['usuario']===""){
    die("error");
}
if(!$_POST['clave']||$_POST['clave']===""){
    die("error");
}


$query = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND clave='".$_POST['clave']."'";
$data = mysqli_query($conexion,$query);
$data = mysqli_fetch_all($data);

if (count($data)>0) {
    session_start();
    $_SESSION["id"]=$data[0][0];
    printf("ok");
}else{
    die(mysqli_error($conexion));
}
?>