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
$edad = 18;
$casado = [true,false];
$sexo = ["masculino","femenino","otro"];

echo "<br>";
if ($edad >=18 && $casado[1] == false && $sexo[1]=="otro") {
echo "bienvendio";
}else {
echo"no cumple con los requisitos";
}
echo "<br>";
$cantidadDeALumnos = 100;
if ($cantidadDeALumnos) {
  echo "true";
  // code...
}else {
  echo "false";
}
echo "<br>";
$numero = true;
$resultado = $numero  ? 'verdadero' : 'falso';

echo $resultado;

echo "<br>";
$nota = rand(0,10);
switch ($nota) {
case 4 :
echo "es $nota";
  break;
  case 5:
    echo "es $nota";
    break;

  case 6:
    echo "la nota es $nota";
    break;
  case 8:
      echo "la nota es $nota";
      break;
  case 9:
      echo "la nota es $nota muy bien";
        break;
  case 10:
  echo "la nota es $nota Excelente";
    break;
    default:
  echo "el numero no es valido $ :(";
}
