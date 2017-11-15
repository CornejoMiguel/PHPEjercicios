<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matematicas</title>
</head>
<body>
<?php

  $numero = $_POST['numero'];
  $numero += 5;

    echo "<table><tr><th>número</th><th>cuadrado</th><th>cubo</th></tr>";
    for ($i=$_POST['numero']; $i < $numero ; $i++)
     {
      $cuadrado = pow($i,2);
      $cubo = pow($i,3);
      echo "<tr><td>".$i."</td><td>".$cuadrado."</td><td>".$cubo."</td></tr>";

     }
    echo "</table>";

?>

</body>
</html>
