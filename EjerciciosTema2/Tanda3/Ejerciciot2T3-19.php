<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Piramide</title>
</head>
<body>


<?php

  if (isset($_POST['imagen']) || isset($_POST['altura']))
  {
    $imagen = $_POST['imagen'];
    $altura = $_POST['altura'];
    $caracter = " ";
    switch ($imagen)
    {
      case 1:
        $caracter = "*";
        break;
      case 2:
        $caracter = "o";
        break;
      case 3:
        $caracter = "-";
        break;
      case 4:
        $caracter = "x";
        break;
      case 5:
        $caracter = "e";
        break;
      default:
        break;
    }
    echo "<center>La piramide de " . $caracter . "</center>";
    for ($i=1; $i <= $altura ; $i++)
    {
      for ($j=1; $j <= $altura - $i ; $j++)
      {
        echo "&nbsp";
      }
      for ($j=1; $j <= $i; $j++)
      {
        echo $caracter;
      }
      echo"<br/>";
    }
    echo"<br/><br/>";
    echo "<a href='Ejerciciot2T3-19.php'>Volver</a>";
  }
  else
  {
    ?>
       <h1>Piramides</h1>
       <form class='' action='Ejerciciot2T3-19.php' method='post'>
         Altura de la pirámide : <input type='number' name='altura' value='' autofocus><br/><br/>
         Imágenes : <select class='' name='imagen'>
           <option value='1'>*(Estrellitas)</option>
           <option value='2'>o(Circulos)</option>
           <option value='3'>-</option>
           <option value='4'>x</option>
           <option value='5'>e</option>
         </select><br/><br/>
         <input type='submit' name='Enviar' value='Enviar'>
       </form>
<?php
  }
?>


</body>
</html>
