<?php
//Conexion
include("php/connect.php");

if (empty($_POST)) {
	if (isset($_POST["btn"])) {
		//Recuperacion de variables
		$name = mysqli_real_esccape_string($conexion, $_POST['name']);
		$email = mysqli_real_esccape_string($conexion, $_POST['email']);
		$subject =  mysqli_real_esccape_string($conexion, $_POST['subject']);
		$message = mysqli_real_esccape_string($conexion, $_POST['message']);

		$sql_contact = "INSERT INTO contacto_usuario(Nombre, Email, Opciones, Mensaje)
								VALUES('$name', '$email', '$subject', '$message')";
		$result_contact = $conexion->query($sql_contact);
		if ($result_contact > 0) {
			 echo "Correccto";
		}else{
			 echo "Error";
		}
	}
}

 ?>