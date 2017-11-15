<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dia de la semana</title>
</head>
<body>

  <?php
    switch ($_POST['dia']) {
      case 1:
        echo"Lunes";
        break;
      case 2:
        echo"Martes";
        break;
      case 3:
        echo"Miercoles";
        break;
      case 4:
        echo "Jueves";
        break;
      case 5:
        echo "Viernes";
        break;
      case 6:
        echo "Sabado";
        break;
      case 7:
        echo "Domingo";
        break;
      default:
        echo"No es un número";
        break;
    }
   ?>
   <br/>
   <a href="EjercicioT2-03.php">Volver</a>

</body>
</html>
