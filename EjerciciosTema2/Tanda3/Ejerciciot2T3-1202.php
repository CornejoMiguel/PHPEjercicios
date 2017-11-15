<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>La serie Fibonacci</title>
</head>
<body>

  <?php
    $numeroF = $_POST['numero'];
    $numeroT = 0;
    $numeroT2 = 1;
    $numeroT3;
    $i = 0;
    echo $numeroT."</br>";
    echo $numeroT2."</br>";
    while($i < $numeroF)
    {
      $numeroT3 = $numeroT + $numeroT2;
      echo $numeroT3."</br>";
      $numeroT = $numeroT2;
      $numeroT2 = $numeroT3;
      $i++;
    }
   ?>
 </br>
 <a href="Ejerciciot2T3-12.php">Volver</a>

</body>
</html>
