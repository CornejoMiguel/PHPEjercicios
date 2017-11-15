<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fecha</title>
</head>
<body>

  <?php
    echo date('l jS \of F Y h:i:s A');
    //setlocale(LC_ALL,"es_ES");
    date_default_timezone_set('Europe/Madrid');
    echo strftime("</br> %A %d de %B del %Y %r"); echo date('A');//%H:%M:%S"
   ?>

</body>
</html>
