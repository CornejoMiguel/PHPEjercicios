<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multiplos de 5</title>
</head>
<body>

  <?php

    for ($i=0; $i <= 100 ; $i++) {
      if($i % 5 == 0 ){
        echo $i . "</br>";
      }
    }

   ?>

</body>
</html>
