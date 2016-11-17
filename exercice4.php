<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>

    <p>
      <?php

      $maVariable = 1;

      while ($maVariable <= 10) {
        echo $maVariable . "<br>";
        $moitie = $maVariable / 2;
        $maVariable += $moitie;

        /* OU
        $maVariable *= 1.5;
        */
      }









       ?>
    </p>


  </body>
</html>
