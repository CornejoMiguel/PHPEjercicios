<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multiplos de 3</title>
</head>
<body>

<?php
if (isset($_POST['numero']) && $_POST['numero'] > 0)
{
  $numero = $_POST['numero'];
  $contador = $_POST['contador'];
  $suma = $_POST['suma'];
  echo "<h1>Multiplos de 3</h1><p>Los multiplos :<p/>";

  for ($i=1; $i <= $numero ; $i++)
  {
    if($i % 3 == 0)
    {
      $suma += $i;
      $contador++;
      echo $i . "<br/>";
    }
  }
  echo "<br/>La cantidad de multiplo es : " . $contador . "<br/>";
  echo "La suma de los multiplos que hay hasta el " . $numero . " es ". $suma;
}
else {
?>
<form class="" action="Ejerciciot2T3-27.php" method="post">
  Número : <input type="number" name="numero" value="">
  <input type="hidden" name="contador" value="0">
  <input type="hidden" name="suma" value="0">
  <input type="submit" name="Enviar" value="Enviar">
</form>
<?php
}
?>

</body>
</html>
