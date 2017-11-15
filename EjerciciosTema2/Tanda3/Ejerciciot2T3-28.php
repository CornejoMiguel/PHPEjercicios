<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Factorial</title>
</head>
<body>

  <?php
    if (isset($_POST['numero']))
    {
      $numero = $_POST['numero'];
      $resultado = 1;
      echo "<h1>Los números factoriales</h1>";
      switch ($numero) {
        case 0:
        case 1:
        echo $numero."! = 1";
          break;
        default:
        echo $numero."! = ";
        for ($i=1; $i <= $numero ; $i++) {
          $resultado = $resultado * $i;
        }

        for ($i=$numero; $i >= 1; $i--) {
          if ($i == 1)
          {
            echo $i. "! ";
          }
          else
          {
            echo $i. "! x ";
          }
        }

        echo " = " . $resultado;
          break;
      }
    }
    else
    {
  ?>
  <h1>Factorial</h1>
  <form class="" action="Ejerciciot2T3-28.php" method="post">
    Número : <input  required type="number" name="numero" value="">
    <input type="submit" name="Enviar" value="Enviar">
  </form>

  <?php
    }
    ?>
</body>
</html>
