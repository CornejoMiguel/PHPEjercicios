<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 7 Tanda 4</title>
</head>
<body>

<?php
  $array = [];
  $arrayPar = [];
  $arrayImpar = [];
  $arrayResultado = [];
  for ($i=1; $i <= 20 ; $i++) {
    $nA = rand(0,100);
    array_push($array,$nA);
  }

  for ($i=0; $i < count($array) ; $i++) {
    if($array[$i] % 2 == 0)
    {
      array_push($arrayPar,$array[$i]);
    }
    else
    {
      array_push($arrayImpar,$array[$i]);
    }
  }

  $arrayResultado = array_merge($arrayPar,$arrayImpar);
  echo "<table><tr>";
  
  for ($i=0; $i < count($arrayResultado); $i++) {
    echo "<td>".$arrayResultado[$i]."</td>";
  }
  echo "</tr></table>";

 ?>

</body>
</html>
