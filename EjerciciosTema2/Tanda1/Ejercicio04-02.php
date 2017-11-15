<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conversor de Pesetas a Euros</title>
</head>
<body>

   <?php
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      echo $n1, " + ", $n2, " = ", $n1+$n2, "<br>";
      echo $n1, " - ", $n2, " = ", $n1-$n2, "<br>";
      echo $n1, " * ", $n2, " = ", $n1*$n2, "<br>";
      echo $n1, " / ", $n2, " = ", round($n1/$n2, $precision = 2), "<br>";

    ?>

</body>
</html>
