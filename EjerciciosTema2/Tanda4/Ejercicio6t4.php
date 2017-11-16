<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 6 Tanda 4</title>
</head>
<body>

<?php
  if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
    $cantidad = $_POST['cantidad'];
    $array = [];
    $texto = $_POST['texto'];
    $texto = $texto . " ". strval($numero);

    if($cantidad <= 8)
    {
      $cantidad++;
?>
<form class="" action="Ejercicio6t4.php" method="post">
  Número : <input type="number" name="numero" value="">
  <input type="hidden" name="cantidad" value="<?php echo $cantidad?>">
  <input type="hidden" name="texto" value="<?php echo $texto?>">
  <input type="submit" name="Enviar" value="Enviar">
</form>

<?php
    }
    else
    {
      $array = explode(" ",$texto);
      for ($i=0; $i < count($array); $i++)
      {
        if($array[$i] % 2 == 0)
        {
          echo "<font color='red'>".$array[$i]."</font><br/>";
        }
        else
        {
          echo "<font color='green'>".$array[$i]."</font><br/>";
        }
      }
    }
  }
  else
  {
?>

  <form class="" action="Ejercicio6t4.php" method="post">
    Número : <input type="number" name="numero" value="">
    <input type="hidden" name="cantidad" value="1">
    <input type="hidden" name="texto" value="">
    <input type="submit" name="Enviar" value="Enviar">
  </form>

<?php
  }
 ?>

</body>
</html>
