
<?php
echo "for <br>";
$numero = 2;
for ($i=0; $i <= 10; $i++) {
  $resultado = 2 * $i;
  echo "2 por $i es $resultado <br>";
}
echo " while <br>";
$numero =100;
while ($numero>= 85) {
   echo "$numero <br>";
   $numero--;
}
echo " while <br>";
echo "<br>";
$contador = [1,2,3,4,5];
$i = 0;
while ($i<1) {
  for ($in=0; $in <count($contador); $in++) {
      $valor = $contador[$in] * 2;
      echo " el valor es $valor <br>";
  }
  $i++;
}
echo "<br>";
$contador = 0 ;
while ($contador<=5){
  $valor = $contador *2;
  echo "el doble es el $valor <br>";
  $contador++;
}

echo "<br>";

$moneda = [0,1];
shuffle($moneda);
var_dump($moneda);
$i = 0;
$VALOR = 0;
while ($moneda[$i] =! 0) {
   $valor = $valor +1;
   echo "moneda  $valor <br>";
   $i++;
   break;
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido [NOMBRE]</h2>
    <h3>¿Es usted un ganador?</h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <li>
        <a href="https://google.com">Google</a>
      </li>
      <li>
        <a href="https://facebook.com">Facebook</a>
      </li>
      <li>
        <a href="https://twitter.com">Twitter</a>
      </li>
    </ul>
  </body>
</html>
