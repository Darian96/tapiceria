<?php
/* for como se usa repetir
for (inicio;condicion;paso){
 //codigo aajecutar
}

*/
for ($i=0; $i <10; $i++) {
  echo "la variable i vale ". $i . "<br>";
}

$colores =["rojo","verde","amarillo"];
for ($i=0; $i < count($colores); $i++) {
  echo $colores[$i]. "<br>";
}

for ($i=10; $i >0 ; $i--) {
  echo "el valor de i es ". $i . "<br>";
}

$resultado =[];
for ($i=0; $i <11 ; $i++) {
  $resultado[$i]=$i;
  echo $i;
}
var_dump($resultado);


/*while y do while repetitivas inexactas
i=0,  iniclizar
while (condicion){
 //se ejecuta el codigo
 i++ incrementar
}
do {
se ejecuta el codigo una vez al menos
}(condicion)

*/
$palabras =["hola","soy","dari","BASTA"];
shuffle($palabras);
var_dump($palabras);

$i = 0;
while ($palabras[$i] != "BASTA") {
    echo $palabras[$i];
    $i++;
}
echo "<br>";
$i = 0;
do {
if ($palabras[$i] == "BASTA") {
echo "la pocision de palabra es  ". $i . " y la palabara es " .$palabras[$i]."<br>";
break;
}else {
  $i++;
}

} while ($palabras[$i] != "BASTA");


/*palabra clave keywords break exit,continue,return


break :(Corta el bucle)
continue:(salta una condicion)
exit: (corta la ejecucion del codigo completamanete)
return (return devuelve un valor o sale de la funcion se usa mas en en una funcion);


*/

for ($i=0; $i <5 ; $i++) {

  if ($i==3) {
   continue;
  }
    echo "la variable i vale ". $i . "<br>" ;
}


/* FOREACH COMO FUNCIONA ARRAY ASOCIATIVO
 DEFINICON:RECORRE TODAS LAS POSCIONES DE ARRAY,TRAYENDO EN CADA VUELTA EL VALOR DE ESA POSICION;
foreach ($variable as $key => $value) {
  // code...
}
*/
$persona = [
  "nombre" => "dario",
  "apellido" => "cuevas",
  "edad" => 87
];
foreach ($persona as $posicion => $valor) {
  echo "la pocision de array  es ".$posicion. "su valor es " .  $valor . "<br>";
};

 ?>
