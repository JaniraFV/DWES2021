<?php
   
    $language = $_COOKIE['LanguageCookie'] ?? "" ;
    $getSetLanguage = $_GET['setLanguage'] ?? 'es';



    if($getSetLanguage == 'es'){

        $language = 'es';

        $content = "Esta página está en Castellano (Idioma por defecto)";
        
        $title = "Cambiar el idioma de la página";

    }else if( $getSetLanguage == 'en'){

            $language = 'en';
            
            $content = "This page is in English";
    
            $title = "Change the language of the page";
            
        }


    
    setcookie("LanguageCookie", $language);
    

?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Janira Fava Vidal">

</head>    

<body>

    <ul><?= $title ?>

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

    </ul>

    <?= $content ?>

</body>

</html>