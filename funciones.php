
<?php
/*
FUNCIONES  nos permite escribir un bloque de codigo que vamos areutilizar en distintos momentos

*/
  function saludar(){
    echo "hola mundo <br>";
  }

saludar();
/*argumentos la funcion necesita parametros si necesitamos mejorarnuestro codigo parametro optativos*/
function saludo($nombre,$apellido,$segundoNombre ="no tiene"){
  echo "hola $nombre $apellido $segundoNombre<br>";
}

saludo("darian","cuevas");
saludo("darian","cuevas","andres");
/*que pasa con las variables
scopes :la variables no se conocen y podemso reutiñlar el nombre delas variables enel ambito global o local de una funcion
*/
$nombre = "dario";
fuction prueba(){

}
prueba();

 ?>
