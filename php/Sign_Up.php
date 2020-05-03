<?php
//Conexion
include('php/connect.php');


if (!empty($_POST)) {
    if (isset($_POST["send"])) {
        //Recuperacion de variables
        $name = mysqli_real_escape_string($conexion, $_POST['name']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $subject =  mysqli_real_escape_string($conexion, $_POST['subject']);
        $message = mysqli_real_escape_string($conexion, $_POST['message']);

        $sql_contact = "INSERT INTO contacto_usuario(Nombre, Email, Opciones, Mensaje)
                                VALUES('$name', '$email', '$subject', '$message')";
        $result_contact = $conexion->query($sql_contact);
        if ($result_contact > 0) {

        }else{

        }
    }
}
//
if (!empty($_POST)) {
  //
  if (isset($_POST["button"])) {
    //Recuperacion de variables
    $f_name = mysqli_real_escape_string($conexion, $_POST['f_name']);
    $l_name = mysqli_real_escape_string($conexion, $_POST['l_name']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);
    //Enccriptamos la contraseña para mayor seguridad
    $password_encriptada = sha1($password);

    //Consultamos si el correo es existente
    $sql_email = "SELECT Email FROM registro_usuario
                  WHERE Email = '$email'";
    $result_email = $conexion->query($sql_email);
    $cont = $result_email->num_rows;
    if ($cont > 0) {
      echo "<script>
            alert('Correo Existente');
          </script>";
    }else{
      //Insercion de registro de usuario en la base de datos
      $sql_user = "INSERT INTO registro_usuario(Nombre, Apellido, Email, Password)
              VALUES('$f_name', '$l_name', '$email', '$password_encriptada')";
      $result_user = $conexion->query($sql_user);
      if ($result_user > 0) {
        echo "<script>
            alert('Registro Exitoso');
            window.location = 'login.php';
          </script>";
      }else{
        echo "<script>
            alert('Error al registrarse');
          </script>";
      }
    }
  }
}
?>