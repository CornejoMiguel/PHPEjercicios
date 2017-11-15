<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exponenciación</title>
</head>
<body>

  <?php

    if(isset($_POST['numeroB']) && isset($_POST['numeroEx']))
    {
      $numeroB = $_POST['numeroB'];
      $numeroEx = $_POST['numeroEx'];
      for ($i=1; $i <= $numeroEx; $i++)
      {
        echo $numeroB . "<sup>" . $i . "</sup><br/>";
      }
    }
    else
    {
      ?>

        <form class='' action='Ejerciciot2T3-15.php' method='post'>
        Número base: <input type='number' name='numeroB' value=''><br/><br/>
        Número exponente: <input type='number' name='numeroEx' value=''><br/><br/>
        <input type='submit' name='Enviar' value='Enviar'>
      </form>
      <?php
    }
   ?>



</body>
</html>
