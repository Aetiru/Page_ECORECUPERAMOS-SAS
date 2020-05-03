<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registrate</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/1.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Your custom styles (optional) -->
  <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
  <!--<link rel="stylesheet" href="css/style.css">-->
  <style type="text/css">
    form{
     width:500px;
     padding:16px;
     border-radius:10px;
     margin:auto;

}
.btn-info {
    color: #fff;
    background-color: #8bc34a !important;
}
  </style>
  <script type="text/JavaScript">
        function validaDatos(formulario){
          if ((form.f_name.value.length == 0) || (form.l_name.value.length == 0) || (form.email.value.length == 0) || (form.password.value.length == 0)) {
              alert("Uno de los campos esta vacio!");
              return false;
          }
          if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(form.email.value)) {
            alert("Email Incorrecto");
            return false;
          }
          return true;
        }
        function soloLetras(e) {
          /*Validacion de nombre y apellido*/
          key = e.keyCode || e.which;
          teclado = String.fromCharCode(key).toLowerCase();
          letras = "abcdefghijklmnñopqrstuvwxyz";
          especiales = "8-37-38-46-164";
          teclado_especiales = false;

          for (var i in especiales) {
            if (key == especiales[i]) {
              teclado_especiales = true; break;
            }
          }
          if (letras.indexOf(teclado) == -1 && !teclado_especiales) {
            return false;
          }
        }

  </script>
      <?php include('php/Sign_Up.php'); ?>

</head>
<body>
  <!-- Start your project here-->

<!-- Default form register -->
<form class="text-center border border-light p-5" action="" name="form" method="post" onsubmit="return validaDatos(this);" id="form">
    <h4><p>Registrate para obtener mas informacion sobre nuestra empresa.</p></h4>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="f_name" class="form-control" placeholder="Nombre" onkeypress="return soloLetras(event);">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="l_name" class="form-control" placeholder="Apellido" onkeypress="return soloLetras(event);">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
          Al menos 8 caracteres y 1 dígito
    </small>

    <!-- Phone number -->


    <!-- Newsletter -->


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" name="button" type="submit" >Registrar</button>

    <!-- Social register -->
    <p>Iniciar sesion con:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-green-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-google light-green-text"></i></a>

    <hr>

    <!-- Terms of service -->
        <a href="" target="_blank">Terminos y servicios</a>

</form>
<!-- Default form register -->
<!-- Default form login -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>