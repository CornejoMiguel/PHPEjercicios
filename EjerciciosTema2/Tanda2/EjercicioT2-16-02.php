<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ultima Cifra</title>
</head>
<body>

  <?php
  $numero = $_POST['numero'];
  $ultimoD = substr($numero,-1);
  echo "El último digito es : ", $ultimoD;
   ?>

   <a href="EjercicioT2-16.php">Volver</a>

</body>
</html>
