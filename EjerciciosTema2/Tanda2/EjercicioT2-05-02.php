<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecuaciones primer grado</title>
</head>
<body>

  <?php
  $variableA = $_POST['variableA'];
  $variableB = $_POST['variableB'];

  if ($variableA == 0)
  {
    echo "Esa ecuación no tiene solución real.";
  }
  else
  {
    echo "x = ", (-$variableB / $variableA);
  }


  ?>
<a href="EjercicioT2-05.php">Volver</a>
</body>
</html>
