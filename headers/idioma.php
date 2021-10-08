<?php
   
    $srvLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ;
    

    $title = "";
    $content = "";


    if($srvLang == 'es'){


        $content = "Esta página está en Castellano (Idioma por defecto)";
        
        $title = "Cambiar el idioma de la página";

    }else if($srvLang == 'en'){

        
        $content = "This page is in English";

        $title = "Change the language of the page";
            
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