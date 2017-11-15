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

    if($cantidad == 7)
    {
        $texto = $texto . strval($numero);
    }
    else
    {
      $texto = $texto . strval($numero) . ",";
    }

    if($cantidad < 7)
    {
      $cantidad++;
?>
<form class="" action="Ejercicio6t4.php" method="post">
  Número : <input type="number" autofocus name="numero" value="">
  <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
  <input type="hidden" name="texto" value="<?php echo $texto ?>">
  <input type="submit" name="Enviar" value="Enviar">
</form>

<?php
    }
    else
    {
      $array = explode(",",$texto);
      print_r($array);
      $array2 = [];
      for ($i=0; $i <count($array) ; $i++) {
       array_push($array2,intval($array[$i]));
      }
      for ($i=0; $i < count($array2); $i++)
      {
        if($array2[$i] % 2 == 0)
        {
          echo "<font color='red'>".$array2[$i]."</font><br/>";
        }
        else
        {
          echo "<font color='green'>".$array2[$i]."</font><br/>";
        }
      }
    }
  }
  else
  {
?>

  <form class="" action="Ejercicio6t4.php" method="post">
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
