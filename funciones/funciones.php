<?php

    $tabla = "alumnos";
    $campos = array("nombre" => "Juan", "apellidos" => "Martinez");
    $text = "insert into tabla (campos) values (valores)";

    $updatedCampos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");


    function insert ($tabla, $campos){

        $text = "insert into $tabla (";

        foreach ($campos as $campo => $valor){
            $text .= "$campo ,";
        }

        $text = substr($text, 0, -1) . ") values (:";

        foreach ($campos as $campo => $valor){
            $text .= "$campo ,:";
        }

        $text = substr($text, 0, -2) . ")";

        return $text;
    }

    echo insert($tabla, $campos);





    function insertReference($tabla, $campos, &$text){

        $text = str_replace("tabla", "$tabla", $text);
        $strCampos="";
        $strValores=":";

        foreach ($campos as $campo => $valor){
            $strCampos .= "$campo, ";
        }

        $strCampos = substr($strCampos, 0, -2) ;
        $text = str_replace("campos", "$strCampos", $text);

        
        foreach ($campos as $campo => $valor){
            $strValores .= "$campo, :";
            
        }
        $strValores = substr($strValores, 0, -3);
        $text = str_replace("valores", "$strValores", $text);


        return $text;
    }

    echo insertReference($tabla, $campos, $text);




    function update ($tabla, $updatedCampos){

        $text = sprintf('UPDATE %s SET %s WHERE id = :id ',
                $tabla,
                // getUpdates($updatedCampos),
                array_key_first($updatedCampos),
                array_key_first($updatedCampos)
            );

        return $text;
       
    }

    echo update($tabla, $updatedCampos);




    
    function realizaOperacion(callable $operacion, string $simbolo, int $operando1, int $operando2){
        echo "$operando1 $simbolo $operando2 =  {$operacion($operando1, $operando2)}";
      }
      $suma = function (int $operando1, int $operando2) {
        return $operando1 + $operando2;
      };
      $resta = function (int $operando1, int $operando2) {
        return $operando1 - $operando2;
      };
      
      $multiplicacion = function (int $operando1, int $operando2) {
        return $operando1 * $operando2;
      };
      $division = function (int $operando1, int $operando2) {
        return $operando1 / $operando2;
      };

      echo realizaOperacion($suma, "+", 8, 2);
      echo realizaOperacion($resta, "-", 8, 2);
      echo realizaOperacion($multiplicacion, "*", 8, 2);
      echo realizaOperacion($division, "/", 8, 2);

?>

