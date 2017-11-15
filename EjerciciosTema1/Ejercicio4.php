<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 4 -PHP-</title>
</head>
<body>
<table>
<?php

$tiempo = 8;
$tableDay = array("Horario","Lunes","Martes","Miercoles","Jueves","Viernes");
echo
for ($i=0; $i < 6; $i++)
{
    if($i == 5){
      echo" $tableDay[$i]</br>";
    }
    else{
      echo" $tableDay[$i]";
    }

}


  for ($j=0; $j < 7; $j++)
  {

    if($tiempo <= 10)
    {
      if($tiempo == 10)
      {
        echo "$tiempo:20</br>";
        $tiempo++;
      }
      else{
        echo "0$tiempo:20</br>";
        $tiempo++;
      }
    }
    else
    {
        if($tiempo == 11)
        {
        echo "$tiempo:20</br>";
        echo "$tiempo:50</br>";
        $tiempo++;
        }
        else
        {
          if($tiempo == 12)
          {
              echo "$tiempo:50</br>";
              $tiempo++;
          }
          else

          {
            echo "$tiempo:50</br>";
            $tiempo++;
          }
        }
    }
  }
?>

</table>
</body>
</html>
