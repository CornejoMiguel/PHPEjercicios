<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Media de numeros positivos</title>
</head>
<body>


  <?php

  if (!isset($_POST['numeroI']))
  {
    $numeroI = -1;
    $media = 0;
    $cuentaNumeros = 0;
  }
  else
  {
    if($media < 0 || $numeroI < 0)
    {

    }
    else
    {
      $numeroI
    }
  }

  echo "<form class="" action="Ejerciciot2T3-10.php" method="post">
  Número : <input type="number" name="numeroI" value="">
  <input type="hidden" name="media" value="<?php echo $media; ?>">
  <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
  <input type="submit" name="Enviar" value="Enviar">
</form>"
   ?>

</body>
</html>
