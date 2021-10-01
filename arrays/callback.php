<?php

$data = ["tengo hambre porque no he comido", "hola", "esto es una cadena", "y esto otra"];

$modified = array_map("strlen", $data);

print_r($modified);
echo "<br><br>";

echo "El numero mas grande es " . max($modified) ."<br><br>";
echo "El numero mas pequeño es " . min($modified)."<br><br>";

?>