<?php

$colors = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
$html = "<ul>";

foreach($colors as $nombre => $color){
    $html .= "<li><a href='$color'>$nombre</li>";
}

$html .= "</ul>" ;

echo $html;

?>