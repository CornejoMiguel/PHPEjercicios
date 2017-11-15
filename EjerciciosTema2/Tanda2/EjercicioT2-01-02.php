<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Asignatura</title>
</head>
<body>

  <?php
  $dia = $_POST['dia'];

  switch ($dia)
  {
    case 'lunes':
      echo "Desarrollo en E.S";
      break;
    case 'martes':
      echo "Desarrolo en E.C";
      break;
    case 'miercoles':
      echo "Libre Configuración";
      break;
    case 'jueves':
      echo "Diseño Web";
      break;
    case 'viernes':
      echo "Empresa";
      break;
    case 'sabado':
    case 'domingo':
      echo "Este día no hay clases";
      break;
    default:
      echo "Introduzca un dia de la semana correctamente";
      break;
  }
   ?>
 </br>
<a href="EjercicioT2-01.php">Volver</a>
</body>
</html>
