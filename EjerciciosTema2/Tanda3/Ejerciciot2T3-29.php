<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Números no divisibles entre otro número</title>
</head>
<body>

  <?php
  if (isset($_POST['numero']) && isset($_POST['numero2']) && $_POST['numero'] > 0 && $_POST['numero2'])
  {
    $n1 = $_POST['numero'];
    $n2 = $_POST['numero2'];
    echo "<h1>Numeros no divisibles de " . $n2 . " hasta ".$n1. "</h1>";
    for ($i=0; $i < $n1 ; $i++) {
      if($i % $n2 != 0)
      {
        echo $i , " <br/>";
      }
    }
  }
  else
  {
  ?>
    <form class="" action="Ejerciciot2T3-29.php" method="post">
      Número : <input required type="number" name="numero" value="">
      2º Número <input required type="number" name="numero2" value="">
      <input type="submit" name="Enviar" value="Enviar">
    </form>
  <?php
  }
  ?>

</body>
</html>
