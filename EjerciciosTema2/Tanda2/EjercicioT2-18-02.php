<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cuantos Digitos</title>
</head>
<body>

  <?php
  $numero = $_POST['numero'];
  $cuantosD = strlen($numero);
  if($cuantosD == 1)
  {
    echo " Tiene ", $cuantosD , " dígito";
  }
  else
  {
    echo " Tiene ", $cuantosD , " dígitos";
  }
   ?>

   <a href="EjercicioT2-18.php">Volver</a>

</body>
