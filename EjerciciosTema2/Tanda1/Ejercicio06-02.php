<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Área de un rectangulo</title>
</head>
<body>

  <?php
  $primerLado = $_POST['x'];
  $segundoLado = $_POST['y'];
  echo "Área del rectangulo: " , $primerLado * $segundoLado;
  ?>

</body>
</html>
