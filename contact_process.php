<?php
  include('php/connect.php');

if (!empty($_POST)) {
    if (isset($_POST["btn"])) {
        //Recuperacion de variables
        $name = mysqli_real_escape_string($conexion, $_POST['name']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $subject =  mysqli_real_escape_string($conexion, $_POST['subject']);
        $message = mysqli_real_escape_string($conexion, $_POST['message']);
        $encabezados = "From: ".$_POST["email"]."\nReply-To: ".$_POST["email"]."\n";
    mail("aetiru@gmail.com", $_POST["subject"], "Nombre: ". $_POST["name"]."\n"."\n". "Mensaje: ".$_POST["message"],$encabezados);


        $sql_contact = "INSERT INTO contacto_usuario(Nombre, Email, Opciones, Mensaje)
                                VALUES('$name', '$email', '$subject', '$message')";
        $result_contact = $conexion->query($sql_contact);
        if ($result_contact > 0) {

        }else{

        }
    }
}
?>