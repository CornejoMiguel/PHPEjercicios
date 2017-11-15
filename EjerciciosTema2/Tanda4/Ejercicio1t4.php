<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 1 Tanda 3</title>
</head>
<body>

  <?php
    $array1 = [];
    for ($i=1; $i <= 20 ; $i++) {
      $n1 = rand(0,100);
      array_push($array1,$n1);
    }

    $arrayCuadrado = [];
    $arrayCubo = [];

    for ($i=0; $i <count($array1) ; $i++) {
      $nCuadrado= pow($array1[$i],2);
      $nCubo = pow($array1[$i],3);

      array_push($arrayCuadrado,$nCuadrado);
      array_push($arrayCubo,$nCubo);
    }
   ?>

   <table>
     <tr>
       <td>Número </td><td>Cuadrado </td><td>Cubo </td>
     </tr>
   <?php
    for ($i=0; $i < count($array1) ; $i++) {
      echo "<tr><td>",$array1[$i],"</td>
      <td>",$arrayCuadrado[$i],"</td>
      <td>",$arrayCubo[$i],"</td></tr>";
    }
    ?>
       </table>

</body>
</html>
