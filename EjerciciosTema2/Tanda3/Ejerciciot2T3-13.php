<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numero positivo o negativo</title>
</head>
<body>
<!--Escribe un programa que lea una lista de diez números
y determine cuántos son positivos, y cuántos son negativos.-->

<?php
if(isset($_POST["n"])){
   $turno = $_POST["turno"];
   $positivos =$_POST["pos"];
   $negativos =$_POST["neg"];
   if($_POST["n"]  >= 0 ){
     $positivos++;
   }else{
     $negativos++;
   }
   if($turno == 9){
     echo "Positivos: ", $positivos, "</br>", "Negativos: ", $negativos;
   }else{
     $turno++;
     echo "  <form action='Ejerciciot2T3-13.php' method='post'>
         Número: <input  required  type='text' name='n'>
         <input type='hidden' name='turno' value=",$turno,">
         <input type='hidden' name='pos' value=",$positivos,">
         <input type='hidden' name='neg' value=",$negativos,">
         <input type='submit' value='Calcular'>
       </form>";
   }
 }else{
   echo "  <form action='Ejerciciot2T3-13.php' method='post'>
       Número: <input  required  type='text' name='n'>
       <input type='hidden' name='turno' value=0>
       <input type='hidden' name='pos' value=0>
       <input type='hidden' name='neg' value=0>
       <input type='submit' value='Calcular'>
     </form>";
 }
 ?>


</body>
</html>
