

<?php
if ($_POST) {
  echo "vine por post";
  header("location:index.php");exit;

}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="formulario-post.php" method="POST">
  <div class="">
    <input type="text" name="nombre" value="<?php  ?>">
  </div>
  <div class="">
    <input type="text" name="apellido" value="">
  </div>
    <input type="submit" name="" value="Enviar">
</form>
  </body>
</html>
