<?php
session_start();
include('php/connect.php');
if (isset($_SESSION["email"])) {
	header("location: social.php");
}
if (!empty($_POST)) {
	if (isset($_POST["button"])) {
		$email = mysqli_real_escape_string($conexion, $_POST['email']);
		$password = mysqli_real_escape_string($conexion, $_POST['password']);
		$pasword_encriptada = sha1($password);

		$sql_login = "SELECT Email FROM registro_usuario
							WHERE Email = '$email' AND Password = '$pasword_encriptada'";
		$result_sql = $conexion->query($sql_login);
		$rows = $result_sql->num_rows;
		if ($rows > 0) {
			$rows = $result_sql->fetch_assoc();
			$_SESSION['email'] = $rows['Email'];
			echo "<script>
                        alert('Sesion Iniciada');
                        window.location = 'social.php';
                 </script>";
		}else{
			echo "<script>
                        alert('Usuario o ContraseÃ±a incorrecto');
                        window.location = 'login.php';
                 </script>";
		}
	}
}

?>