<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php");  ?>
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

/*ARRAY ASOCIATVIO*/
$miArray1 = [
 "nombre" =>"darian",
 "apellido"=>"sus",
 "colores" =>["azul","rojo","verde"]
];
echo $miArray1["apellido"];

/*operadores +- POTENCIA Y PORCENTAJE EJEMPLO CONCANEDACION TAMBIEM */
$numero1 = 32;
$numero2 = 58;
$resultado = $numero1 + $numero2;
$resultado1 = $numero1 * $numero2;
$resultado2 = $numero1 ** $numero2;

$Nombre = "MARIO";
$apellido = "damasco";

$TEXTO = "Mi nombre es " . $Nombre . " y " . $apellido;


echo $TEXTO;



 ?>
  </body>
</html>
