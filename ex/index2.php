<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // se l'email è corretta stampo $ok
    $ok = '<div class="ok">OK</div>';

    // altrimenti stampo $ko
    $ko = '<div class="ko">KO</div>';

    // variabile che prende il contenuto di mail
    $mail = $_GET["mail"];

    // variabile che controlla se mail contiene una @
    $chiocciolato = strpos($mail, "@");

    // variabile che controlla se mail contiene un .
    $puntato = strpos($mail, ".");

    $risultato;

    if ($chiocciolato > 0 && $puntato > 0){
      $risultato = $ok;
    }else{
      $risultato = $ko;
    }
     ?>

    <div class="">
      <?php echo $risultato; ?>
    </div>


  </body>
</html>
