<?php
require_once "conexion.php";

$subs_user = utf8_decode($_POST['User']);
$subs_cont = utf8_decode($_POST['Contrasenia']);
$subs_Ps = utf8_decode($_POST['Preg_seguridad']);
$subs_Rs = utf8_decode($_POST['Resp_seguridad']);


$res = mysqli_query($enlace, $query);

if (!$db_connection) {
    die('No se ha podido conectar a la base de datos');
   }
   $subs_name = utf8_decode($_POST['nombre']);
   $subs_last = utf8_decode($_POST['apellido']);
   $subs_email = utf8_decode($_POST['email']);
    
   $resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);
    
   if (mysql_num_rows($resultado)>0)
   {
    
   header('Location: Fail.html');
    
   } else {
    
    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Apellido` , `Email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';
    
   mysql_select_db($db_name, $db_connection);
   $retry_value = mysql_query($insert_value, $db_connection);
    
   if (!$retry_value) {
      die('Error: ' . mysql_error());
   }
    
   header('Location: Success.html');
   }
    
   mysql_close($db_connection);

 
?>