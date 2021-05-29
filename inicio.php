<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tapiceria</title>
  </head>
  <body>
aqui va la hora
<?php
 /*echo date("d/m/y H:i a");*/

  $segundos =  date("s");
  if ($segundos > 30) {
    echo "estamos en el final de minuto";
  }else {
    echo "estamos en el principio de minuto";
  }

  echo '--';
  $Nombre = "dario";
  echo $Nombre;
  var_dump($Nombre);

/*declarar un array*/

$miArray =[];
/*agreagr a um elemento al array*/
$miArray[2]= "dario";
$miArray[1]= "sus";
$miArray[3]= 87;
echo $miArray[2];
var_dump($miArray);
/*agreagr a um elemento  o inicilizar al array de otra forma*/
$otroArray =[1,"darian","cuevas",25,["amarillo",25,"negro"]];
echo $otroArray[0];
echo $otroArray[1];
echo $otroArray[2];
var_dump($otroArray);
 ?>
  </body>
</html>
