<?php

$contactos = array(

    array("codigo" => 1, "nombre" => "Juan Pérez",

    "telefono" => "966112233", "email" => "juanp@gmail.com"),

    array("codigo" => 2, "nombre" => "Ana López",

    "telefono" => "965667788", "email" => "anita@hotmail.com"),

    array("codigo" => 3, "nombre" => "Mario Montero",

    "telefono" => "965929190", "email" => "mario.mont@gmail.com"),

    array("codigo" => 4, "nombre" => "Laura Martínez",

    "telefono" => "611223344", "email" => "lm2000@gmail.com"),

    array("codigo" => 5, "nombre" => "Nora Jover",

    "telefono" => "638765432", "email" => "norajover@hotmail.com"),

    );
    
//http://localhost/DWES2021/arrays/filter.php?filter=@gmail

$filter = strtolower($_GET["filter"] ?? "");    

    $filtered = array_filter($contactos, function ($contacto) use ($filter){
        return strpos (strtolower($contacto["email"]),$filter) !== FALSE;
    });
    
print_r($filtered);
?>