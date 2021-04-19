<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajo Practico Daniel Videla</title>
  </head>
  <body>
    <h1>Hola Mundo</h1>
    <hr>
    <h2>Practica 1</h2>
    <?php $saludo="Hola Mundo";
    echo "<h3>$saludo</h3><br>";?>
    <hr>

    <h2>Celsius a Fahrenheit</h2>
    <?php
    $grados=20;
    $d1=1.8;
    $d2=32;
    $fahrenheit=($grados*$d1)+$d2;
    echo "($grados*$d1)+$d2=  $fahrenheit";?>
    <hr>

    <h2>Perimetro del Rectangulo </h2>
    <?php
    $n1=12;
    $n2=18;
    $n3=2;
    $resultado1=$n3*($n1+$n2);
    echo "$n3*($n1+$n2)=   $resultado1<br>";?>
    <hr>

     <h2>Area Rectangulo</h2>
     <?php
     $h=12;
     $b=18;
     $resultado=$h*$b;
     echo "$h*$b= $resultado<br>";?>
     <hr>

      <h2>Perimetro Circulo </h2>
      <?php
      $r=30;
      $pi=3.14;
      $n=2;
      $p=$n*$pi*$r;
      echo "$n*$pi*$r;= $p<br>";?>
      <hr>


      <h2>Area Circulo </h2>
      <?php
      $r=30;
      $pi=3.14;
      $A=$r*$r*$pi;
      echo "$r*$r*$pi;=  $A<br>";?>
      <hr>


  </body>
</html>
