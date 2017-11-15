<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Volumén de un cilindro</title>
</head>
<body>

  <?php
    $radio = $_POST['radio'];
    $altura = $_POST['altura'];
    $radiox2 = $radio * $radio;
    $pi = pi();
    $volumen = round(($pi * $radiox2 * $altura)/3,$precision = 2);
    echo "El volumen es : ",$volumen;
   ?>
   <br/>
   <a href="Ejercicio09-01.php">Volver</a>

</body>
</html>
