<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Horoscopo</title>
</head>
<body>

  <?php
    $zodiaco = "";

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];

    if((($dia >= "21") && ($mes == "3")) ||
   (($dia <= "19") && ($mes == "4"))){
    $zodiaco="Aries";
}
if((($dia >= "20") && ($mes == "4")) ||
  (($dia <= "20") && ($mes == "5"))){
    $zodiaco="Tauro";
}
if((($dia >= "21") && ($mes == "5")) ||
  (($dia <= "21") && ($mes == "6"))){
    $zodiaco="Geminis";
}
if((($dia >= "22") && ($mes == "6")) ||
  (($dia <= "22") && ($mes == "7"))){
    $zodiaco="Cancer";
}
if((($dia >= "23") && ($mes == "7")) ||
  (($dia <= "22") && ($mes == "8"))){
    $zodiaco="Leo";
}
if((($dia >= "23") && ($mes == "8")) ||
  (($dia <= "22") && ($mes == "9"))){
    $zodiaco="Virgo";
}
if((($dia >= "23") && ($mes == "9")) ||
  (($dia <= "22") && ($mes == "10"))){
    $zodiaco="Libra";
}
if((($dia >= "23") && ($mes == "10")) ||
  (($dia <= "21") && ($mes == "11"))){
    $zodiaco="Escorpio";
}
if((($dia >= "22") && ($mes == "11")) ||
        (($dia <= "21") && ($mes == "12"))){
    $zodiaco="Sagitario";
}
if((($dia >= "22") && ($mes == "12")) ||
  (($dia <= "19") && ($mes == "1"))){
    $zodiaco="Capricornio";
}
if((($dia >= "20") && ($mes == "1")) ||
  (($dia <= "18") && ($mes == "2"))){
    $zodiaco="Acuario";
}
if((($dia >= "19") && ($mes == "2")) ||
  (($dia <= "20") && ($mes == "3"))){
    $zodiaco="Piscis";
}

    echo "Tu signo es : ", $zodiaco;
   ?>
   <br/>
  <a href="EjercicioT2-10.php">Volver</a>
</body>
</html>
