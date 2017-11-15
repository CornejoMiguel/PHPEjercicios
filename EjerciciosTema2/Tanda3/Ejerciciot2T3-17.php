<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>100 numeros siguientes</title>
</head>
<body>

  <?php

   if (isset($_POST['numero']))
   {
    $numero = $_POST['numero'];
    $total = $_POST['cantidad'];
    if ($numero >= 0)
    {
      for ($i=$numero+1; $i < ($numero+101) ; $i++)
      {
        $total = $total + $i;
      }

      echo"La suma total es : " . $total;
    }
    else
    {
      ?>
      <h1>100 numeros siguientes</h1>
      <p>Por favor introduzca un número positivo</p>
      <form class='' action='Ejerciciot2T3-17.php' method='post'>
        Número : <input type='text' name='numero' value=''><br/><br/>
        <input type='hidden' name='cantidad' value='0'>
        <input type='submit' name='Enviar' value='Enviar'>
      </form>
      <?php
    }

   }
   else
   {
     ?>
     <h1>100 numeros siguientes</h1>
     <form class='' action='Ejerciciot2T3-17.php' method='post'>
       Número : <input type='text' name='numero' value=''><br/><br/>
       <input type='hidden' name='cantidad' value='0'>
       <input type='submit' name='Enviar' value='Enviar'>
     </form>
     <?php
   }

   ?>

</body>
</html>
