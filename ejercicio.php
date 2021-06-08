<?php
$persona = [
"nombre" => "jon",
"apellido"=>"Snow",
"edad"=>27,
"hobbies"=>["netflix","Futbol","programar"]
];

$persona["edad"] = 25;
$persona ["direccion"] = "WINTERFELL";

echo $persona["edad"];
echo "<br>";
echo $persona["direccion"];
$persona["hobbies"][] ="leer libros";
var_dump($persona["hobbies"]);
var_dump($persona["hobbies"]);
echo $persona["hobbies"][3];

echo "<br>";
$num1 = 10;
$num2 =19;

if ($num1 >$num2) {
  echo "numero 1 es mayor = " . $num1;
}else {
  echo "numero 2 es mayor = ". $num2;
};
echo "<br>";
$aleatorio = rand(2,5);
if ($aleatorio == 3 || $aleatorio == 5) {
echo $aleatorio;
}else {
  echo "no se encontro el 3 y 5";
};
echo "<br>";



$rango = rand(1,100);
if ($rango>=50) {
  echo $rango;

}else {
  echo "el numero es menor  $rango";
}
echo "<br>";


$nombreDeUsuario ="admin";
$ContraseniaDeUsuario ="add";

if ($nombreDeUsuario =="admin"  && $ContraseniaDeUsuario =="1234") {
  echo "BIENVENIDO";
}else if ($nombreDeUsuario != "admin") {
  if ($nombreDeUsuario == "") {
    echo "esta vacio el nombre";
  }else {
  echo "error nombre  " . $nombreDeUsuario;
  }
} elseif ($ContraseniaDeUsuario!= "1234") {
  if ($ContraseniaDeUsuario== "") {
    echo "esta vacio elcampo contraseña";
  }else {
  echo "error clave  " . $ContraseniaDeUsuario;
  }
}
