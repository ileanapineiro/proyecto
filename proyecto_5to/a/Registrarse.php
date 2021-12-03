<?php
require_once "conexion.php";

//Si los campos estan vacios se agregan a la base de datos

$user = $_POST ("user");
$email = $_POST ("email");
$pas = $_POST ("pas");

$insertar = "INSERT INTO personass (user, email, pas) VALUES ('$user','$email','$pas')";

$resul = mysql_query($conn, $insertar);

if (!$insertar){
	echo'error al registrarse';
	}
	else{
	echo 'usuario registrado de forma correcta'; 
}


mysql_close ($conn);

	
?>

<form method="POST">
    <table>
        <tr>
            <td>Correo:</td>
            <td><input type="text" name="email"></td>
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
    </table>
</form>
<?php