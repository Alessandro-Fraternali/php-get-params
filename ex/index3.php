<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // creo una variabile che prenda il valore di name
      $nome = $_GET["name"];
      // creo una variabile che prenda il valore di surname
      $cognome = $_GET["surname"];
     ?>

     <h1>
      <?php echo "Benvenuto, " . $nome . " " . $cognome . "."; ?>
     </h1>
  </body>
</html>
