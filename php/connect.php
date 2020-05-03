<?php
include('php/configuration.php');
$conexion = new mysqli($server, $user, $password, $bd);
if (mysqli_connect_errno()) {
	echo "No conectado", mysqli_connect_error;
	exit();
}
?>