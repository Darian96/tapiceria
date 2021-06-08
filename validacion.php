
<?php

if ($_POST){

  if (strlen($_POST["nombre"])==0) {
    echo "no escribio su nombre <br>";
  }
  if (strlen($_POST["usuario"])<8) {
    echo "el usuario debe contener 8 caracteres <br>";
  }
  if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)  == false) {
    echo "EL MAIL NO TIEEN EL FORMATO CORRECTO <br>";
  }

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="validacion.php" method="post">
      <div class="">
        <label for="">nombre</label>
        <input type="text" name="nombre" value="">
      </div>
      <div class="">
        <label for="">Usuario</label>
        <input type="text" name="usuario" value="">
      </div>
      <div class="">
        <label for="">email</label>
        <input type="text" name="email" value="">
      </div>
      <div class="">
        <label for="">edad</label>
        <input type="text" name="edad" value="">
      </div>
      <div class="">
        <button type="submit" name="enviar">Enviar</button>
      </div>
    </form>
  </body>
</html>
