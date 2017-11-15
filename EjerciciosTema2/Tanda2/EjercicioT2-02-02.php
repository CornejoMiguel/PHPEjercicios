<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Horario</title>
</head>
<body>

<?php
  $horario = $_POST['hora'];
  if($horario>= 6 && $horario <12)
  {
    echo "<h1> Buenos dias </h1>";
  }
  else
  {
    if($horario>=12 && $horario<=20)
    {
      echo "<h1> Buenas tardes </h1>";
    }
    else
    {
        if($horario > 24)
        {
            echo "<h1> Hora erronea </h1>";
        }
        else
        {
          echo "<h1> Buenas noches </h1>";
        }
    }
  }
 ?>
 <a href="EjercicioT2-02.php">Volver</a>

</body>
</html>
