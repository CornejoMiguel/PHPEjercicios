<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notas Medias</title>
</head>
<body>

  <?php
    $notaT = 0;
    $notaCad = "";
    $notas = array($_POST['nota1'],$_POST['nota2'],$_POST['nota3']);
    /*$nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];*/

    //Mejorado usando bucles
    for ($i=0; $i < count($notas) ; $i++)
    {
      if($notas[$i] < 0)
      {
        $notas[$i] = 0;
      }
      else if ($notas[$i] > 10)
      {
        $notas[$i] = 10;
      }
    }

    $notaT = $notas[0] + $notas[1] + $notas[2];
    $notaT = round($notaT / 3,$precision = 2);

    if($notaT >= 0 && $notaT < 5)
    {
      $notaCad = "insuficiente";
    }
    else
    {
      if($notaT >= 5 && $notaT < 6)
      {
        $notaCad = "suficiente";
      }
      else
      {
        if($notaT >= 6 && $notaT < 7)
        {
          $notaCad = "bien";
        }
        else
        {
            if($notaT >= 7 && $notaT < 9)
            {
              $notaCad = "notable";
            }
            else
            {
                if($notaT <= 10)
                {
                  $notaCad = "sobresaliente";
                }
            }
        }
      }
    }



    echo "La media de las 3 notas es : ", $notaT, " y es un ", $notaCad;
   ?>
 </br>
   <a href="EjercicioT2-08.php">Volver</a>

</body>
</html>
