<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 8 Tanda 4</title>
</head>
<body>

  <?php

  if(isset($_POST['numero']))
  {
    $numero = $_POST['numero'];
    $cantidad = $_POST['cantidad'];
    $texto = $_POST['texto'];

    if($cantidad == 9)
    {
        $texto = $texto . strval($numero);
    }
    else
    {
        $texto = $texto . strval($numero) . " ";
    }

    if($cantidad < 9)
    {
      $cantidad++;
    ?>

      <form class="" action="Ejercicio8t4.php" method="post">
        Número : <input type="number" required autofocus name="numero" value="">
        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
        <input type="hidden" name="texto" value="<?php echo $texto ?>">
        <input type="submit" name="Enviar" value="Enviar">
      </form>

  <?php
    }
    else
    {
      $array = explode(" ",$texto);
      $arrayP = [];
      $arrayNoP = [];
      $array2 = [];

      // Muestra el array original
        // Índice
        /*echo "Array original:<br>";
        echo "<table><tr>";
        for ($i = 0; $i < 10; $i++) {
          echo "<td>$i</td>";
        }
        echo "</tr>";

        // Contenido
        for ($i = 0; $i < 10; $i++) {
          echo "<td>".$numero[$i]."</td>";
        }
        echo "</tr></table>";*/

        //Primos

        for ($i=0; $i < count($array) ; $i++)
        {
          $j = $array[$i];
          $k = 1;
          $esPrimoC = 0;
          echo  "el numero : ". $j . "<br/>";
          while ($k <= $j)
          {
            if(($k % $j) == 0)
            {
              $esPrimoC++;
            }
            $k++;
          }
            echo "contador del Nº PRIMO : " . $esPrimoC . "<br/>";
          }
          if($esPrimoC == 2)
          {
            array_push($arrayP,$j);
          }
          else
          {
            array_push($arrayNoP,$j);
          }

        array_merge($arrayP,$arrayNoP);
        print_r($arrayP);
        print_r($array2);

    }
  }
  else
  {
  ?>

  <form class="" action="Ejercicio8t4.php" method="post">
    Número : <input type="number" required autofocus name="numero" value="">
    <input type="hidden" name="cantidad" value="0">
    <input type="hidden" name="texto" value="">
    <input type="submit" name="Enviar" value="Enviar">
  </form>

  <?php
  }
  ?>

</body>
</html>
