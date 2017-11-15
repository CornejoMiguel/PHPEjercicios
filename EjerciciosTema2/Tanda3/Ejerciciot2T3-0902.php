<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>¿Cuántos dígitos tiene el número?</title>
</head>
<body>
  <?php
    $numero = $_POST['numero'];
    $cuantosD = 0;

    while ($numero>= 1)
    {
      $numero = $numero/10;
      $cuantosD++;

    }
    if($cuantosD == 1 )
    {
      echo "El número tiene : ". $cuantosD . " digito";
    }
    else
    {
      echo "El número tiene : ". $cuantosD . " digitos";
    }
   ?>
 </br>
   <a href="Ejerciciot2T3-09.php">Volver</a>
</body>
</html>
