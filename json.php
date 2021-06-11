<?php
/*
tomar archivos  y agregar o quitarles texto por php
json es formato particular parta traducir datos en un string y recuperar
desde un string todos los datos
datos en array <--> string em json
{
"empleador":[
{"firstname":"john","lastname":"doe"},
{"firstname":"john","lastname":"doe"}
] :

}

*/

$autos =[
  0 => [
    "marca" => "ford",
    "modelo"=>"fiesta",
    "patente"=>"23jop"
  ],
  1 => [
    "marca" => "reno",
    "modelo"=>"sandero",
    "patente"=>"12wer"
  ],
  2 => [
    "marca" => "toyota",
    "modelo"=>"corola",
    "patente"=>"45yui"
  ]
];
$json = json_encode($autos);
var_dump($json);
// si pongo true aal decode le pído a json encode que quiero en un formato de array asociativo y no en objeto
$arrayOrigfinal = json_decode($json,true);
var_dump($arrayOrigfinal);
 ?>
