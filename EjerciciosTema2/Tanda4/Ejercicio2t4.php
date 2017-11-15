<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 2 Tanda4</title>
</head>
<body>

  <?php
  if(isset($_POST['numero']))
  {
    $max = PHP_INT_MIN;
    $min = PHP_INT_MAX;
    $cantidad = $_POST['cantidad'];
    echo "La primera cantidad : ". $cantidad ."</br>";
    $numero = $_POST['numero'];
    $texto = $_POST['texto'];
    $array = [];
    //echo "Mi número : " . $numero;
    //array_push($array,$numero);
    if ($cantidad == 9)
    {
      $texto = $texto . strval($numero);
    }
    else
    {
      $texto = $texto . strval($numero) . ",";
    }
    $array = explode(",", $texto);
    echo "Tus numeros : " . $numero;

    if($cantidad < 9)
    {
      $cantidad++;
      print_r($array);
      echo "<br/>Tras sumarle +1 hasta 10 : ".$cantidad;
   ?>
      <form class="" action="Ejercicio2t4.php" method="post">
      Número : <input type="number" autofocus name="numero" value="">
      <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
      <input type="hidden" name="texto" value="<?php echo $texto ?>">
      <input type="submit" name="Enviar" value="Enviar">
      </form>
  <?php
    }
      else
      {
        for ($i=0; $i < count($array) ; $i++)
        {
          if($array[$i] > $max)
          {
            $max = $array[$i];
          }
          if($array[$i] < $min)
          {
            $min = $array[$i];
          }
        }
        echo  "<h1>El máximo y el mínimo</h1>";
        echo "El máximo es :" . $max;
        echo "</br> El mínimo es : " . $min;
      }
    }
  else
  {
  ?>

  <form class="" action="Ejercicio2t4.php" method="post">
  Número : <input type="number" autofocus name="numero" value="">
  <input type="hidden" name="cantidad" value="0">
  <input type="hidden" name="texto" value="">
  <input type="submit" name="Enviar" value="Enviar">
  </form>

  <?php
  }
   ?>

</body>
</html>
