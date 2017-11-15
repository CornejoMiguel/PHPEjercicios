<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecuacion de 2ºGrado</title>
</head>
<body>

<?php

$a = $_POST['valorA'];
$b = $_POST['valorB'];
$c = $_POST['valorC'];
$resultado1 = 0;
$resultado2 = 0;
$raiz = ($b * $b) - (4 * $a * $c);
                if ($raiz > 0)
                {
                    $raiz = sqrt($raiz);
                    $resultado1 = round((-$b + $raiz) / (2 * $a), $precision = 2);
                    $resultado2 = round((-$b - $raiz) / (2 * $a), $precision = 2);
                    echo "Los resultados de la ecuación son x1 : ", $resultado1, " y x2 : ", $resultado2;
                }
                else
                {
                    if ($raiz == 0)
                    {
                        $resultado1 = -$b / (2 * $a);
                        echo "El resultado de la ecuación es : ",$resultado1;
                    }
                    else
                    {//raiz < 0
                        echo "La ecuacion no tiene soluciones reales";
                    }
                }
 ?>
<br/>
 <a href="EjercicioT2-09.php">Volver</a>

</body>
</html>
