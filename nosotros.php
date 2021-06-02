

<?php
$secciones = ["home","Nosotros","preguntas"];
$articulos= ["sega","family","play"];
$nombre = "";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nosotros</title>
  </head>
  <body>
<header>
  <nav>
    <ul>
      <?php foreach ($secciones as $posicion => $seccion): ?>
       <li>
         <?php echo $seccion ?>
       </li>
      <?php endforeach; ?>
    </ul>
  </nav>
  <?php if ($nombre == null): ?>
    <span>no esta logeado</span>
    <?php else: ?>
      <span>esta logeado
      </span>
  <?php endif; ?>
</header>
<section>
  <ul>
<?php foreach ($articulos as $posicion => $articulo): ?>
   <li>
 <?= $articulo?>
  </li>
<?php endforeach; ?>
  </ul>
</section>
  </body>
</html>
