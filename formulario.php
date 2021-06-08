
<?php

$nombre = "";
$email = "";
if ($_GET) {
  $nombre = $_GET["nombre"];
  $email = $_GET["email"];
}


$Casas = [
 "s"=>"casaS",
 "m"=>"casaM",
  "n"=>"casaN"
];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>documento</title>
  </head>
  <body>
    <form class="" action="resultados.php" method="GET">
    <div class="">
      <input type="text" name="nombre" value="<?=$nombre?>">
    </div>
    <div class="">
      <input type="text" name="email" value="<?=$email?>">
    </div>
    <div class="">
      <select class="" name="casa">
        <?php foreach ($Casas as $codigo =>$casa): ?>
          <option value="<?php $codigo ?>">
            <?= $casa?>
            </option>
        <?php endforeach; ?>

      </select>
    </div>
 <div class="">
   <input type="submit" name="" value="enviar">
 </div>

    </form>
  </body>
</html>
