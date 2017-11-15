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
      echo $_POST['pesetas'], " pesetas son ";
      echo round($_POST['pesetas'] / 166.386,$precision = 2), " euros.";
    ?>

</body>
</html>
