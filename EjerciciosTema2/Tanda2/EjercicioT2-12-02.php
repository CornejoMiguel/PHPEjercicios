<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Minicuestionario</title>
</head>
<body>

  <?php
  $i = 0;
  $array = array[]
  $puntuacion = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'];
  echo "Tu puntuación ha sido : ",$puntuacion;
   ?>

</body>
</html>
