<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medianoche</title>
</head>
<body>

  <?php
  $hora = $_POST['hora'];
  $minuto = $_POST['minutos'];
  $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
  $segundosHastaMedianoche = (24 * 3600) - $segundosTranscurridos;
  echo "Desde las $hora:$minuto hasta la medianoche faltan ";
  echo "$segundosHastaMedianoche segundos.";
   ?>

   <br/>
<a href="EjercicioT2-11.php">Volver</a>
</body>
</html>
