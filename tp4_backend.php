<?php
echo "<h1>Trabajo practico</h1>";
  echo " <h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
  </h2>";
  $Numpar=[2,4,6,8,10,];
  foreach ($Numpar as $valor) {
    echo "<p>$valor</p>";
}
echo " <h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h2>";
$ValoresN=["Pedro","Ana",34,1,];
print_r($ValoresN);

echo "<h2>3. Crear un array asociativo e introducir los siguientes valores:</h2>";

$PD=["Nombre"=>"Pedro","Apellido"=>"Torres","Dirección"=>"Av. Mayor 3703","Teléfono"=>"1122334455"];

foreach ($PD as $indice=>$valor) {
echo "<p>$indice=>$valor</p>";
}

echo "<h2>4. Crear un array introduciendo las ciudades: </h2>";

$cuidades=["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
echo "La cuidad con el indice <b>3</b> tiene el nombre <b>$cuidades[3]</b>";

echo "<h2>5. Repite el ejercicio anterior pero ahora se ha de crear índices,</h2>";

$matriz=["MD"=>"Madrid",
        "BCL"=>"Barcelona",
        "LD"=>"Londres",
        "NY"=>" New York",
        "LA"=>"Los Ángeles",
        "CCG"=>" Chicago",];

$fruta="CCG";
foreach ($matriz as $indice => $valor) {
  if ($indice==$fruta) {
      echo "El índice de Chicago es $indice";
  }
}
 ?>
