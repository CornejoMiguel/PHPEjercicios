<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numero Primo</title>
</head>
<body>

  <?php
    if(isset($_POST['numero']))
    {
      $numero = $_POST['numero'];
      $contador = $_POST['cantidad'];
      for ($i=1; $i <= $numero ; $i++)
      {
        if($numero % $i == 0)
        {
          $contador++;
        }
      }
      if($contador == 2)
      {
        echo "El " . $numero . " es primo porque es divisible solo por 1 y por si mismo";
      }
      else
      {
        echo "El " . $numero . " no es primo";
      }
    }
    else
    {
      ?>
      <h1>Número Primo</h1>
      <form class='' action='Ejerciciot2T3-16.php' method='post'>
        Número : <input type='text' name='numero' value=''><br/><br/>
        <input type='hidden' name='cantidad' value='0'>
        <input type='submit' name='Enviar' value='Enviar'>
      </form>
<?php
    }
   ?>


</body>
</html>
