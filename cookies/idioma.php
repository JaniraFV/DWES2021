<?php
   
    $language = $_COOKIE['LanguageCookie'] ?? "" ;

    
    if ($language == ""){

        $language = "$_GET('setLanguage')";
        
        $content = "Esta página está en Castellano (Idioma por defecto)";
        
        $title = "Cambiar el idioma de la página";
        
        
    }else if(($_GET('setLanguage')) == 'en'){

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