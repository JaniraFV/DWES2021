<?php

$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");



asort($edades);

echo "Ordenado por EDAD ascendente<br>";

foreach($edades as $name => $edad){
    echo "$name --> $edad<br>";
};



arsort($edades);

echo "<br>Ordenado por EDAD descendente<br>";

foreach($edades as $name => $edad){
    echo "$name --> $edad<br>";
};



ksort($edades);

echo "<br>Ordenado por NOMBRE ascendente<br>";

foreach($edades as $name => $edad){
    echo "$name --> $edad<br>";
};



krsort($edades);

echo "<br>Ordenado por NOMBRE descendente<br>";

foreach($edades as $name => $edad){
    echo "$name --> $edad<br>";
};


?>