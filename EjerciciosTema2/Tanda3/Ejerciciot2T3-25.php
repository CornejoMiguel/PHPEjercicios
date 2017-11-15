<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Número al reves</title>
</head>
<body>

  <?php
  if (isset($_POST['numero']))
  {
    $numeroalReves = strrev($_POST['numero']);
    echo "Tu número es : " , $numeroalReves;
  }
  else
  {
   ?>
   <form class="" action="Ejerciciot2T3-25.php" method="post">
     Número : <input required type="text" name="numero" value="">
     <input type="submit" name="Enviar" value="Enviar">
   </form>
<?php
  }
 ?>
</body>
</html>
