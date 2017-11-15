<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numero par o divisible por 5</title>
</head>
<body>

  <?php

    if($_POST['numero'] % 5 == 0 && $_POST['numero'] % 2 == 0)
    {
      echo "El ",$_POST['numero']," es divisible por 5 y es un número par";
    }
    else
    {
      if($_POST['numero'] % 5 == 0)
      {
        echo "El ",$_POST['numero']," es divisible por 5 y no es un número par";
      }
      else
      {
        if($_POST['numero'] % 2 == 0)
        {
          echo "El ",$_POST['numero']," no es divisible por 5 pero es un número par";
        }
        else
        {
          echo "El ",$_POST['numero']," no es divisible por 5 y no es un número par";
        }
      }

    }

   ?>
 </br>
<a href="EjercicioT2-14.php">Volver</a>
</body>
</html>
