<?php

$productos = ["1" => "Producto_1", "2" => "Producto_2", "3" => "Producto_3"];
$prod = $_GET["prod" ?? ""];


    if (array_key_exists($prod, $productos)){
        echo "Producto selecionado : " .$productos[$prod];
    }else{
        http_response_code(404);
        echo "ERROR 404, product not found!!";
    }

?>
