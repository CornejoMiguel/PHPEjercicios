<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ejercicio 3 -PHP-</title>
</head>
<body>
<table>
<?php


$tableSpanish = array("Mama","Papa","Hermano","Hermana","Abuelo","Abuela","Amigo","Novio","Novia","Perro");

$tableEnglish = array("Mother","Father","Brother","Sister","GrandFather","GrandMother","Friend","BoyFriend","GirlFriend","Dog");
$cV = 0;

echo"<tr><th> Castellano </th> <th> Ingles </th></tr>";
for ($i=0; $i < 10 ; $i++)
{

echo "<tr>";
  for ($j=0; $j < 2 ; $j++)
  {
    if($j == 0){
      echo "<td>$tableSpanish[$cV]</td>";
    }
    if($j == 1){
      echo "<td>$tableEnglish[$cV]</td>";
    }
  }
  $cV++;
  echo "</td>";

}

 ?>


</table>
</body>
</html>
