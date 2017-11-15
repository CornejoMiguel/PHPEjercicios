<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multiplos de 5 con bucle do-while</title>
</head>
<body>

  <?php
  $i = 0;

  do
  {
    if($i % 5 == 0)
    {
      echo $i . "</br>";

    }
    $i++;
  } while ($i <= 100);
   ?>

</body>
</html>
