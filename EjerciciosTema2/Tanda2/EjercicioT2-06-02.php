<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tiempo</title>
</head>
<body>


  <?php
  $altura = $_POST['h'];
  $tiempo = sqrt((2*$altura)/9.81);

  echo "El objeto tardará en caer ",$tiempo;
   ?>
   <br/>
  <a href="EjercicioT2-06.php">Volver</a>
</body>
</html>
