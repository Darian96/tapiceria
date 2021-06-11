
<?php
/*agrgar un archivo file  adjuntar
validar que el archivo se haya subido bien y como guardarlo de lado del servidor sea foto o un archivo.
!)agregar un campo input type file
2)indicarle al html que este formulario envia archivos completos
$variable superglobal files envia en archivo
es un array asociativo tiene tantas possicones comoa archivos se hayan subido y para cada uno de esos arhivos tenemos un campo error (0 o 1 y distintos si hay mas arhivos) , el nombre del archivo
que sa va  asosiar con el nombre del archivo subido ej: arvhivo.doc, otro campo va hacer si un testxto o video etc.  otro campo es tpm_name hace referencia a todo el archivo en si la informacion toda.
*/

if ($_FILES){
  var_dump($_FILES);
  if ($_FILES["cv"]["error"] !=0) {
    echo "hubo un error CV";
  }else {
    $name = pathinfo($_FILES["cv"]["name"], PATHINFO_FILENAME);
    $ext = pathinfo($_FILES["cv"]["name"],PATHINFO_EXTENSION);
    var_dump($ext);
    if ($ext != "doc" && $ext !="docx" && $ext!="pdf") {
      echo "formato incorrecto debe ser doc o docx o pdf";
    }else {
      /*no hay errores cargar la imagen
       cargar imagen move_uploaded_file el arrhcio que queremos subir y nombre dela rchivo y
        el tpm_name  y va a recibir donde queremsos guardar el archivo
      */
      move_uploaded_file($_FILES["cv"]["tmp_name"],"ejemplofile/$name." .$ext);
    }
  }
  if ($_FILES["imagen"]["error"] != 0) {
  echo "hubo un error imagen <br>";
  }else {
    $name = pathinfo($_FILES["imagen"]["name"], PATHINFO_FILENAME);
  $ext = pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION);
  var_dump($ext);
  if ($ext != "jpeg" && $ext !="png" && $ext!="jpg") {
    echo "formato incorrecto debe ser doc o docx o pdf";
  }else {
    move_uploaded_file($_FILES["imagen"]["tmp_name"],"ejemplofile/$name." .$ext);
  }
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<form class="" action="manejo-archivos.php" method="POST" enctype="multipart/form-data">
<div class="">
  <br>
  <label for="">cv</label>
  <input type="file" name="cv" value="">
</div>
<div class="">
<br>
  <label for="">imagen</label>
  <input type="file" name="imagen" value="">
</div>
<button type="submit" name="button"> Enviar</button>
  </form>
   </body>
 </html>
