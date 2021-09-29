<?php

$temperatures = "25, 27, 13, 16, 34, 23, 27, 28, 27, 25, 29, 14, 24, 22";

$temps = explode(", ", $temperatures);


echo "La media de los valores del array es " . (array_sum($temps)/count($temps));

echo "<br><br>Los 5 numeros más grandes del array son : <br>" ;

rsort($temps);
print_r (array_slice($temps, 0, 5));



echo "<br><br>Los 5 numeros más pequeños del array son : <br>" ;

print_r (array_slice($temps, -5));

?>