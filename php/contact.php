<?php
if($_POST["btn"]=="1"){
  $encabezados = "From: ".$_POST["email"]."\nReply-To: ".$_POST["email"]."\n";
   mail("aetiru@gmail.com", $_POST["options"], "Nombre: ". $_POST["f_name"]."\n"."\n". "Mensaje: ".$_POST["message"],$encabezados);

}
?>