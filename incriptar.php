<?php
/*funciones de hash es una que permite trasformar un texto plano en untexto
encriptado
dos caracteristicas imposrtantes
1)no hay manera de que si yo tengo el hash recupere el texto original;
2)al volver a encriptar la contraseña original,nos da un hash vereficable con lo guardado
*/
$clave= "monito123";
$hash = password_hash($clave,PASSWORD_DEFAULT);
var_dump($clave);
var_dump($hash);
//VERIFICAR CONTRASEÑA DE NUEVO PASSWORD_VERIFY devueleve booleano
$resultado = password_verify($clave,$hash);
var_dump($resultado);
 ?>
