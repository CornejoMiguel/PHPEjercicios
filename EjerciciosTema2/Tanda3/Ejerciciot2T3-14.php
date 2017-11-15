<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Potencia</title>
</head>
<body>

  <?php

   if(isset($_POST['base']) && isset($_POST['exponente']))
   {
     $numeroB = $_POST['base'];
     $numeroEx = $_POST['exponente'];

     if($numeroB >= 0  && $numeroEx >= 0)
     {
       echo "El resultado es : ",pow($numeroB,$numeroEx);
     }
     else
     {
       echo "Los números no son positivos";
     }
   }
   else
   {
     ?>

    <form class='' action='Ejerciciot2T3-14.php' method='post'>
       Número de base : <input type='number' name='base' value='' autofocus><br/><br/>
       Número de exponente : <input type='number' name='exponente' value='' autofocus><br/><br/>
       <input type='submit' name='Enviar' value='Enviar'>
     </form>
     <?php
   }

   ?>


</body>
</html>
