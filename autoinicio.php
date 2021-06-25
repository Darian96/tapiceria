<?php
$autos =[
  0 => [
    "marca" => "ford",
    "modelo"=>"fiesta",
    "patente"=>"23jop"
  ]
];

/*$json = json_encode($autos);
file_put_contents("autos.json",$json);
*/
$archivos = file_get_contents("autos.json");
$autos = json_decode($archivos,true);
$autos[] = [
  "marca" =>"renault",
  "modelo" =>"sandero",
   "patente"=>"ada"
];
$carga = json_encode($autos);
file_put_contents("autos.json",$carga);


 ?>
