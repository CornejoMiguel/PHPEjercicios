<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ordenar</title>
</head>
<body>

  <?php
    $arrayN = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3']);
    sort($arrayN);
    echo "Tus números ordenados : ";
    for ($i=0; $i < count($arrayN) ; $i++) {
      if($i == count($arrayN) - 1)
      {
        echo $arrayN[$i];
      }
      else{
        echo $arrayN[$i]. ",";
      }
    }
   ?>
</br>
  <a href="EjercicioT2-13.php">Volver</a>
</body>
</html>
