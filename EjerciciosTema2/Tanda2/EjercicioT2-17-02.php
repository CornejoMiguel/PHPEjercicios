<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Primera Cifra</title>
</head>
<body>

  <?php
  $numero = $_POST['numero'];
  $primerD = substr($numero,0,1);
  echo "El primer digito es : ", $primerD;
   ?>

   <a href="EjercicioT2-17.php">Volver</a>

</body>
</html>
