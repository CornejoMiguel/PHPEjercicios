<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Media de los impares y pares</title>
</head>
<body>

  <?php
    if(isset($_POST['numero']))
    {
      $impares = $_POST['impares'];//Será la media de todos los numeros
      $pares = $_POST['pares'];
      $numero = $_POST['numero'];
      $cantidad = $_POST['cantidad'];
      if($_POST['numero'] > 0 )
      {
        if($numero % 2 != 0)
        {
          $impares = $impares + $numero;
        }
        else
        {
          if($numero > $pares)
          {
            $pares = $numero;
          }
        }
        $cantidad++;
        echo "<form class='' action='Ejerciciot2T3-21.php' method='post'>
        Número : <input required type='number' name='numero' value='numero'>
        <input type='hidden' name='impares' value=",$impares,">
        <input type='hidden' name='pares' value=",$pares,">
        <input type='hidden' name='cantidad' value=",$cantidad,">
        <input type='submit' name='Enviar' value='Enviar'>
        </form>";
      }
      else
      {
        $media = $impares / $cantidad;
        echo "La cantidad de número es : ", $cantidad, "<br/> El mayor de los
        números pares es : ", $pares , "<br/> La media de los numeros impares es : " , $media;
      }
    }
    else
    {
      echo "<form class='' action='Ejerciciot2T3-21.php' method='post'>
      Número : <input required type='number' name='numero' value='numero'>
      <input type='hidden' name='impares' value='0'>
      <input type='hidden' name='pares' value='0'>
      <input type='hidden' name='cantidad' value='0'>
      <input type='submit' name='Enviar' value='Enviar'>
      </form>";
    }
   ?>

</body>
</html>
