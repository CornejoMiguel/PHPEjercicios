<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numero enteros comprendidos incrementados</title>
</head>
<body>

  <?php
  if (isset($_POST['numero']) || isset($_POST['numeroT']))
  {
   $numero = $_POST['numero'];
   $numero2 = $_POST['numero2'];
   if ($numero != $numero2)
   {
     if($numero > $numero2)
     {
       echo " Los numeros comprendidos entre ". $numero2 . " y " . $numero . " son : <br/>";
       for ($i=$numero2; $i <= $numero ; $i = $i + 7)
       {
         echo $i . "<br/>";
       }

     }
     else
     {
        echo " Los numeros comprendidos entre ". $numero . " y " . $numero2 . " son : <br/>";
       for ($i=$numero; $i <= $numero2 ; $i = $i + 7)
       {
         echo $i . "<br/>";
       }
     }
   }
   else
   {
     ?>
     <h1>Números incrementados de 7 en 7</h1>
     <p>Por favor introduzca dos número distintos</p>
     <form class='' action='Ejerciciot2T3-18.php' method='post'>
       Número : <input type='text' name='numero' value=''><br/><br/>
       2º Número : <input type='text' name='numero2' value=''><br/><br/>
       <input type='submit' name='Enviar' value='Enviar'>
     </form>
     <?php
   }

  }
  else
  {
    ?>
    <h1>Números incrementados de 7 en 7</h1>
    <form class='' action='Ejerciciot2T3-18.php' method='post'>
      Número : <input type='text' name='numero' value=''><br/><br/>
      2º Número : <input type='text' name='numero2' value=''><br/><br/>
      <input type='submit' name='Enviar' value='Enviar'>
    </form>
     <?php 
  }

   ?>

</body>
</html>
