<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tp2_Daniel Videla</title>
  </head>
  <body>
    <h2>Punto Numero 1</h2>
    <?php
      $n=20;
      if ($n>0) {echo "$n=es un numero Positivo<br>";
        // code...
      }else {echo "$n=es un numero negativo<br>";
        // code..}
      } ?>
      <hr>
<h2>Punto Numero 2</h2>
<?php
  $n=20;
  if ($n>1 and $n<10) {echo "$n= Es número mayor a 1 y menor a 10<br>";
    // code...
  }else {echo "$n= NO es número mayor a 1 y menor a 10<br>";
    // code..}
  } ?>
<hr>
<h2>Punto Numero 3</h2>
<?php
$n=20;
if ($n>10 or $n<2) {echo "$n=Es un número mayor a 10 o menor a 2<br>";
  // code...
}else {echo "$n= NO es un número mayor a 10 o menor a 2<br>";
  // code..}
} ?>
<hr>
<h2>Punto Numero 4</h2>
    <?php
      $numero1=5;
      $numero2=4;
      $suma=$numero1+$numero2;
      $resta=$numero1-$numero2;
      $mutiplicacion=$numero1*$numero2;
      $divicion=$numero1/$numero2;
      $resto=$numero1%$numero2;
      if ($numero1>$numero2) {
      echo "<h3>Numero1 es mayor a numero2,</h3>$numero1+$numero2=$suma <br> $numero1-$numero2=$resta ";
      // code...
      } elseif ($numero1==$numero2) {echo "<h3>($numero1=$numero2) Los números ingresados son iguales</h3>";
        // code...

      } else { echo "<h3>Numero1 no es mayor a numero2</h3>$numero1*$numero2=$mutiplicacion <br> $numero1/$numero2=$divicion <br> $numero1%$numero2=$resto";
      // code...
      }
     ?>
  </body>
</html>
