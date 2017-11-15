<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numeros primos del 2 al 100</title>
</head>
<body>

<?php

echo "<h1>Los números primos del 2 al 100</h1>";
for ($i=2; $i <= 100 ; $i++)
{
  $numero = $i;
  $contador = 0;

  for ($j=1; $j <= $numero ; $j++)
  {
    if($numero % $j == 0)
    {
      $contador++;
    }
  }

  if($contador == 2)
  {
    echo $numero . "<br/>";
  }
}

?>

</body>
</html>
