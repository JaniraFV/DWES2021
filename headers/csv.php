<?php

$productos = ["1" => "Producto_1", "2" => "Producto_2", "3" => "Producto_3"];

$csv = "";

foreach($productos as $id => $prod){

    $csv .= $id . ";" .$prod .";\n";

}

echo $csv;

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="productos.csv"');


?>