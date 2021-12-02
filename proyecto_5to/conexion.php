<?php

$enlace = mysqli_connect('localhost', 'root', '', 'infinit');

if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>