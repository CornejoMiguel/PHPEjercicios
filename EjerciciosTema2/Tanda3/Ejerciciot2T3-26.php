<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posición o posiciones</title>
</head>
<body>

<?php

if (isset($_POST['numero']))
{
    $numero = $_POST['numero'];
    $digito = $_POST['digito'];



}
else
{
?>
  <form class="" action="Ejerciciot2T3-26.php" method="post">
    Número : <input type="text" name="numero" value="">
    Digito : <input type="text" name="digito" value="">
    <input type="submit" name="Enviar" value="Enviar">
  </form>
<?php
}
?>
</body>
</html>
