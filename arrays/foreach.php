<?php

$colores = array('blanco', 'verde', 'rojo');
$html = "<ul>" ;

foreach($colores as $color ){
    $html .= "<li> $color </li>";
}

$html .= "</ul>" ;

echo $html;


?>