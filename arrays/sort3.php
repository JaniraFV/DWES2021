<?php

$data =["Marcos" => "Futbolista", "Sara" => "Periodista deportivo", "Jan" => "Desarrollador web", "Alejandro" => "Jugador de futbol sala"];
//print_r(($data));
//strlen("Cadena");

function cmp($a, $b){

    if (strlen($a) == strlen($b)){
        return 0;
    }
    return (strlen($a) > strlen($b)) ? 1 : -1;


};

uasort($data, "cmp");
print_r($data);

?>