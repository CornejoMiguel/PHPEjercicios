<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Área de un triangulo</title>
</head>
<body>

  <?php
  $base = $_POST['base'];
  $h = $_POST['altura'];

  echo "Área del triangulo: " , (($base*$h)/2);

  ?>

</body>
</html>
