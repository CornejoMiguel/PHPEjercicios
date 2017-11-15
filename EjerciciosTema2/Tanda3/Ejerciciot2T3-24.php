<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Piramide de números</title>
</head>
<body>

<?php
if(isset($_POST['numero']))
{
  $numero = $_POST['numero'];
  $contador = $numero;
  for ($i=1; $i <= $numero ; $i++)
  {
    for ($j=1; $j <= $numero - $i ; $j++)
    {
      echo "&nbsp";
    }
    for ($j=1; $j <= $i; $j++)
    {
      echo $contador;
    }
    $contador++;
    echo"<br/>";
  }
}
else
{

?>

<form class="" action="Ejerciciot2T3-24.php" method="post">
Número : <input required type="number" name="numero" value="numero">
<input type="submit" name="Enviar" value="Enviar">
</form>

<?php
}
?>
</body>
</html>
