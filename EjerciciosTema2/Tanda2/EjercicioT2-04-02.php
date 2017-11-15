<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Horas del trabajador</title>
</head>
<body>
  <h1>Horas del trabajador</h1>
  <?php
    $horas = $_POST['horasS'];
    $salarioTotal = 0;
    $horasExtras = 0;

    if ($horas>=0)
    {
      $horasextras = $horas - 40;
      $horas = $horas - $horasextras;
      $salarioTotal = $horas * 12;
      $salarioTotal += $horasextras * 16;

    }
    echo "El salario semanal es : ", $salarioTotal;
   ?>
   <a href="EjercicioT2-04.php">Volver</a>
</body>
</html>
