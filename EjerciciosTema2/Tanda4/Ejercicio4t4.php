<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4 Tanda 4</title>
</head>
<body>

  <?php
  $array = [];
  for ($i=1; $i <= 100 ; $i++)
  {
    $nAle = rand(0,20);
    array_push($array,$nAle);
  }
  if (isset($_POST['valor']) && isset($_POST['valor2']))
  {

    $valor =$_POST['valor'];
    $valor2 = $_POST['valor2'];

  for ($i=0; $i < count($array); $i++) {
      if($array[$i] != $valor){
        echo $array[$i] . " ";
      }
      if($array[$i] == $valor)
      {
        echo "<font color='red'>".$valor2."</font>" ." ";
      }
    }
  }
  else
  {
    for ($i=0; $i < count($array); $i++)
        {
          echo $array[$i] . " ";
        }
        echo "</br></br>";
    ?>
    <form class="" action="Ejercicio4t4.php" method="post">
      Valor 1º : <input type="number" autofocus name="valor" value="">
      Valor 2º : <input type="number" autofocus name="valor2" value="">
      <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
  }
   ?>

</body>
</html>
