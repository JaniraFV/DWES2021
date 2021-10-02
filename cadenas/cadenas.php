<?php

// http://localhost/DWES2021/cadenas/cadenas.php?nombre=Jan

$name = "";
$prefijo = "";
$url = 'http://username:password@hostname:9090/path?arg=value';

function nameAssign(&$name){

  if($_GET["nombre"] == NULL){
    $name = "usuario";
  }else{
    $name = trim(($_GET["nombre"]), "/");
  }

  return $name;

}
echo "Te llamas " . htmlspecialchars(nameAssign($name)) ;



function getLength($name){

  return strlen($name);

}

echo "<br><br>La longitud de la cadena " . $name . " es " . getLength($name);




function mayus($name){

  return strtoupper($name);

}

echo "<br><br>El nombre en mayúsculas es " . mayus($name);

function minus($name){

  return strtolower($name);

}

echo "<br><br>El nombre en minúsculas es " . minus($name);



// http://localhost/DWES2021/cadenas/cadenas.php?nombre=Janira&prefijo=J

function samePrefix($name, &$prefijo){
  
  if(($_GET["prefijo"]) == NULL){
    $prefijo = "";
    return "<br><br>Prefijo no definido";
  }else{
    $prefijo = ($_GET["prefijo"]);
  }

  $position = strpos($name, $prefijo);

  if ($position !== false){
    return "<br><br>La cadena contiene el prefijo";
  }else {
    return "<br><br>La cadena NO contiene el prefijo";
  }

}
echo samePrefix($name, $prefijo);



function howMuch($name){

  $name = strtolower($name);

  return substr_count($name, "a");

}

echo "<br><br>Hay " .howMuch($name) . " 'a' en la cadena";


function whereIs($name){

  if (stripos($name, "a") === NULL){
    return "No existe la 'a' en esta cadena";
  }else{
    return "La primera letra 'a' se encuentra en la posición " . stripos($name, "a");
  }

}

echo "<br><br>" . whereIs($name);


function change($name){

  $name = strtolower($name);

  return str_ireplace("o", "0", $name);
}

echo "<br><br>Cadena reemplazada : " . change($name);


echo "<br><br>" . $url;

function analizeUrl($url){

  echo "<br>Protocolo usado : " . parse_url($url, PHP_URL_SCHEME);
  echo "<br>Nombre de usuario : " . parse_url($url, PHP_URL_USER);
  echo "<br>Path de la URL : " . parse_url($url, PHP_URL_PATH);
  echo "<br>Querystring de la URL : " . parse_url($url, PHP_URL_QUERY);

}

echo analizeUrl($url);

?>