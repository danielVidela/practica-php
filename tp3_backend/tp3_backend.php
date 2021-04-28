<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP3 Daniel Videla</title>
    <link rel="stylesheet" href="tp3styles.css">
  </head>
  <body >
    <header>
      <h1 class="">Trabajo Practico 3</h1>
      <h2>ESTRUCTURAS DE CONTROL: PARTE 2</h2>
    </header>
    <main>
      <h2>1. Mostrar los números del 1 al 100.</h2>

        <div class="three-columns">

          <?php
          $i=1;
          while ($i<=100) {
          echo "<p>$i</p>";
          $i++;
        }
         ?>
       </div><br>
       <hr>
       <hr>

      <h2>2. Mostrar los números del 100 al 1</h2>
        <div class="three-columns">
          <?php
          $i=100;
          do{echo"<p>$i</p>\n";
            $i--;
          } while ($i >= 1);
           ?>
        </div><br>
        <hr>
        <hr>
        <h2>3. Mostrar los números pares del 1 al 100</h2>
        <div class="three-columns">
          <?php
          for($i=2; $i<=100; $i= $i+2){
            echo "<p>$i</p>";}
           ?>
        </div><br>
        <hr>
        <hr>
      <h2>4. Mostrar los números impares del 1 al 100.</h2>
        <div class="three-columns">
          <?php

            $i=1;
            while ($i<=100) {
            echo "<p>$i</p>";
            $i=$i+2;
            }
           ?>
         </div><br>
         <hr>
         <hr>

      <h2>5. Mostrar la suma de los números de 1 a 20</h2>
      <section >
        0
        <?php
        $i=1;
        while ($i<=20) {
        echo "<p>+</p><p>$i</p>";
        $i++;}
        $suma = 0;
        for ($i = 1; $i <= 20; $i++) {
            $suma += $i;
              }
        echo "=$suma Es la suma total";

       ?>


      </section><br>

      <hr>
      <hr>
      <h2>6. Mostrar la suma de números pares de 1 a 20.</h2>
      <section >
        0
        <?php

        $suma=0;
        for ($i = 1; $i <= 20; $i++) {
        while ($i%2==0) {
              $suma += $i;
              $i++;}}

        for($i=2; $i<=20; $i= $i+2){
          echo "<p>+</p><p>$i</p>";}
          echo "=$suma Es la suma total";
        ?>
      </section><br>

      <hr>
      <hr>


    </main>
    <footer>Trabajo Practico 3 Daniel Videla</footer>
  </body>
</html>
