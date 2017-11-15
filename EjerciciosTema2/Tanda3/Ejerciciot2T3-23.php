<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valor 10000</title>
</head>
<body>

<?php

if(isset($_POST['numero']))
{
    $numero = $_POST['numero'];
    $suma = $_POST['suma'] + $numero;
    $media = $_POST['media'];
    $cantidad = $_POST['cantidad'];

    if($suma < 10000)
    {
      $cantidad++;
      echo "<form class='' action='Ejerciciot2T3-23.php' method='post'>
        Número : <input required type='number' name='numero' value='numero'>
        <input type='hidden' name='suma' value=",$suma,">
        <input type='hidden' name='cantidad' value=",$cantidad,">
        <input type='hidden' name='media' value=",$media,">
        <input type='submit' name='Enviar' value='Enviar'>
      </form>";
    }
    else
    {
      $media = $suma / $cantidad;
      echo "La suma es : " , $suma, ", la cantidad de números es : ", $cantidad,
      " y la media es : ", $media;
    }
}
else
{
  echo "<form class='' action='Ejerciciot2T3-23.php' method='post'>
    Número : <input required type='number' name='numero' value='numero'>
    <input type='hidden' name='suma' value='0'>
    <input type='hidden' name='cantidad' value='0'>
    <input type='hidden' name='media' value='0'>
    <input type='submit' name='Enviar' value='Enviar'>
  </form>";
}

?>

</body>
</html>
