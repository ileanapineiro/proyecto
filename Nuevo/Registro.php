<form method="POST">
    <table>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Clave:</td>
            <td><input type="password" name="pas"></td>
        </tr>
		
	
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
	
        <tr>
            <td colspan="2"> </td>
        </tr>
    </table>
</form>





<?php

require_once 'conexion1.php';

$Nombre = $_POST ['user'];
$contra = $_POST ['pas'];

//almacenan  los datos 
//consulta para insertar

$insertar = "INSERT INTO personass (user,pas) 
	VALUES ('$Nombre','$contra')";


//Ejecutar el quer

$ejecutar = mysql_query($conn, $insertar);

if(!$ejecutar){
	
	echo 'error al registrarse'; 
	
	}
	else{
		
	echo'usuario registrado'; 

	}
?>


 