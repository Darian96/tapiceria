<?php
/*
para escribir una acookie usamos
setcookie(parametro,parametro,parametro); 3 parametros recibe
parametro que informacion queremos guardar del lado del usurio
ejemplo el (idioma,valor,cuanto tiempo va a durar la cookie)
*/
setcookie("idioma", "ES", time() + 15);
/*eliminar una cookie
setcookie("moneda", "", -1;
*usar una cookie hasta que se ciere el navegador
setcookie
*/
setcookie("moneda", "AR", time()+ 60 * 60);
echo "se guardaron las cokies";
 ?>
