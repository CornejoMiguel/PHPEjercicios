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
    /*
    if ($nota1 < 0 )
    {
      $nota1 = 0;
    }
    else if($nota1 > 10){
      $nota1 = 10;
    }

    if ($nota2 < 0 )
    {
      $nota2 = 0;
    }
    else if($nota2 > 10){
      $nota2 = 10;
    }

    if ($nota3 < 0 )
    {
      $nota3 = 0;
    }
    else if($nota3 > 10){
      $nota3 = 10;
    }*/

    $notaT = $notas[0] + $notas[1] + $notas[2];
    $notaT = round($notaT / 3,$precision = 2);

    echo "La media de las 3 notas es : ", $notaT;
   ?>
   <a href="EjercicioT2-07.php">Volver</a>

</body>
</html>
