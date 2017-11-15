<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Infidelidad</title>
</head>
<body>

<h1>Test finalizado</h1>
</br>
  <?php
    $arrayP = array($_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],
    $_POST['p5'],$_POST['p6'],$_POST['p7'],$_POST['p8'],$_POST['p9'],
    $_POST['p10']);

    $puntuacion = 0;

    for ($i=0; $i <count($arrayP) ; $i++) {
      if($arrayP[$i] == 'v')
      {
        $puntuacion = $puntuacion + 3;
      }
    }

    if($puntuacion >= 0 && $puntuacion <= 10)
    {
      echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    }
    else
    {
        if($puntuacion >= 11 && $puntuacion <= 22)
        {
          echo "Quizás exista el peligro de otra persona en su vida o en su mente,
          aunque seguramente será algo sin importancia. No bajes la guardia.";
        }
        else
        {
          if($puntuacion >= 23 && $puntuacion <= 30)
          {
            echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona.
            Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
          }
        }
    }
   ?>
 </br>
  </br>
<a href="EjercicioT2-15.php">Volver</a>
</body>
</html>
