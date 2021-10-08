<?php
   
    $srvNavigator = $_SERVER['HTTP_USER_AGENT'];
    $title = "test";
    $content = "test";

    if (strpos($srvNavigator, 'Firefox') === false){

        $title = "Error!!!";
        $content = "You have to download and install Firefox to continue";
        
    }else{
        
        $title = "Welcome!!!";
        $content = "This is my web page!";

    }
    
?>



<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Janira Fava Vidal">

</head>    

<body>
    
    <?= $content ?>

</body>

</html>