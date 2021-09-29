<?php

$nombres = ["1" => "Jan", "2" => "Alejandro", "3" => "Estefania"];
$alumnos = [  ["id" => "1", "nombre" => "Jan", "edad" => "19"],
              ["id" => "2", "nombre" => "Alejandro", "edad" => "87"],
              ["id" => "3", "nombre" => "Estefania", "edad" => "13"]
];

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//Muestra numero de elementos del array

function countElements($nombres){
  return count($nombres);
}

echo countElements($nombres) . "<br><br>";

//Crear cadena separada con espacios

function separaStr($nombres){
  return implode(" ", $nombres);
}

echo separaStr ($nombres) . "<br><br>";

//Muestra array ordenado alfabéticamente

function orderElements($nombres){
  asort($nombres);
foreach($nombres as $id => $nombre){
  echo $nombre . "<br>";
}
}

echo orderElements($nombres) . "<br><br>";


//Mostrar el array en orden inverso

function reverseArray($nombres){

  $reversed = array_reverse($nombres);
  $preserved = array_reverse($nombres, true);
  
  print_r ($reversed);
}

echo reverseArray($nombres) . "<br><br>";


// Buscar en el array un nombre

function findMyName($nombres){
  return array_search("Jan", $nombres);
}

echo "El nombre está en la posicion " . findMyName($nombres) . "<br><br>";


// Hacer una tabla con los datos del array alumnos

function array_to_table($matriz) {   
   $html = "<table>";

   // Table header
        foreach ($matriz[0] as $clave=>$fila) {
          $html .= "<th>".$clave."</th>";
        }

    // Table body
       foreach ($matriz as $fila) {
        $html .= "<tr>";
           foreach ($fila as $elemento) {
            $html .= "<td>".$elemento."</td>";
           } 
           $html .= "</tr>";
       } 
       $html .= "</table>";
      
      return $html;}

echo array_to_table($alumnos) . "<br><br>";


// Imprimir elementos de un array indexado

function printNames($alumnos){
  $names = array_column($alumnos, "nombre");
  print_r($names);
}

echo printNames($alumnos) . "<br><br>";


//Suma todos los elementos del array

function sumaNums($nums){

  return array_sum($nums);

}

echo "El resultado de sumar todos los numeros del array es " . sumaNums($nums);

?>