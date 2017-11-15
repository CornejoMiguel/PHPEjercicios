<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Acceso a la caja fuerte</title>
</head>
<body>

<?php

            if (!isset($_POST['oportunidades']))
            {
            $numeroI =0;
            $oportunidades = 5;
            }
            else
            {
            $oportunidades = $_POST['oportunidades'];
            $numeroI = $_POST['numeroIntroducido'];
            }

if($numeroI == 1234)
{
  echo"<br/>Contraseña correcta, se ha abierto la caja fuerte";
}
else
{
  if($oportunidades == 1 )
  {
    echo"<br/>Contraseña incorrecta, la caja fuerte quedará cerrada";
    //header('Location:https://www.redtube.com');
  }
  else{
    $oportunidades--;
    echo "<h1>Introduce un número de cuatro cifras.</h1>";
    echo '<form action="Ejerciciot2T3-07.php" method="post">';
    echo 'Número : <input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
    echo "<br/>Contraseña incorrecta, te quedan ",$oportunidades;
    echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">',"</br></br>";
    echo '<input type="submit" value="Continuar">';
    echo '</form>';
  }
}


 ?>

</html>
