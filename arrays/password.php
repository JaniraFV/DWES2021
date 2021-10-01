<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

    $pwd = chr(rand(65, 90));
    $minus = "";
    $nums = "";
    $other = "";

    for ($i=0; $i<5; $i++) {
        $minus .= chr(rand(97, 122));
    }

    $pwd .= $minus;


    for ($i=0; $i<3; $i++) {
        $nums .= rand(0, 9);
    }

    $pwd .= $nums;



    for ($i=0; $i<2; $i++) {
        $other .= chr(rand(33, 47));
    }

    $pwd .= $other;


return str_shuffle($pwd);

}
echo rand_Pass()
?>