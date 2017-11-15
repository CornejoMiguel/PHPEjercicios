<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicion 3 Tanda 4</title>
</head>
<body>

  <?php

    if(isset($_POST['numero']))
    {
      $numero = $_POST['numero'];
      $cantidad = $_POST['cantidad'];
      $texto = $_POST['texto'];
      $array = [];

      if ($cantidad < 15)
      {
        $cantidad++;
        ?>
        <form class="" action="Ejercicio3t4.php" method="post">
        Número : <input type="number" autofocus name="numero" value="">
        <input type="hidden" name="cantidad" value="<?php echo $cantidad?>">
        <input type="hidden" name="texto" value="<?php echo $texto . " " . $numero ?>">
        <input type="submit" name="Enviar" value="Enviar">
        </form>
        <?php
      }
      else{
        $texto . " " . $numero;
        $texto = substr($texto, 2);
        $array = explode(" ", $texto);
        $ultimoE = $array[14];
        //Mostrar array original

        echo "<table><tr>";
        for ($i=0; $i < 2 ; $i++) {
          if ($i == 0) {
            for ($j=0; $j < 15 ; $j++) {
              echo "<td>".$j."</td>";
            }
          }
          else
          {
            echo "</tr>";
            for ($j=0; $j < 15 ; $j++) {
              echo "<td>".$array[$j]."</td>";
            }
          }
        }
        echo "</table></br></br>";

        //Rotar los elementos

        for ($i=14; $i > 0 ; $i--) {
          $array[$i] = $array[$i-1];
        }

        $array[0] = $ultimoE;
        //Mostrar el array cambiado
        echo "<table><tr>";
        for ($i=0; $i < 2 ; $i++) {
          if ($i == 0) {
            for ($j=0; $j < 15 ; $j++) {
              echo "<td>".$j."</td>";
            }
          }
          else
          {
            echo "</tr>";
            for ($j=0; $j < 15 ; $j++) {
              echo "<td>".$array[$j]."</td>";
            }
          }
        }
        echo "</table></br></br>";
      }
    }
    else
    {
  ?>

    <form class="" action="Ejercicio3t4.php" method="post">
    Número : <input type="number" autofocus name="numero" value="">
    <input type="hidden" name="cantidad" value="0">
    <input type="hidden" name="texto" value="">
    <input type="submit" name="Enviar" value="Enviar">
    </form>

  <?php
    }
   ?>

</body>
</html>
