<?php
require_once "conexion1.php";
session_start();
//definir la variable error
$error = "";

//el pas e email validar si existe el usuario

if(isset($_POST['pas']) && isset($_POST['user'])){
    $sql = "SELECT * 
            FROM personass 
            WHERE pas='".$_POST['pas']."' 
            AND user='".$_POST['user']."'";
            
			//ejecutar la consulta
    $res = consulta($conn, $sql);

//Si existe el usuario 

// mysqli_num_rows contar filas 
//Para saber si esta logueado


//si se encuentra en la base de datos
//cuanta filas devuelve la consulta res
//session se quede almacenada en el navegador

    if(1 == mysqli_num_rows($res)){
		$_SESSION = mysqli_fetch_assoc($res);
		header ('location: index.html');
    }else{
        $error = "usuario no encontrado";
    }
}


?>

<form method="POST">
    <table>
        <tr>
            <td>User:</td>
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
            <td colspan="2"><?php echo $error; ?></td>
        </tr>
		
		<tr>
            <td colspan="2"><input type="submit" name = "registrarse"></td>
        </tr>
	
	
    </table>
</form>
<?php


//si existe sesion

//if(isset($_SESSION['user']));{
	//echo $_SESSION['user'];  

//}







?>