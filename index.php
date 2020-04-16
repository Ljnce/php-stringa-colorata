<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <?php

    //Creo le mie variabili con i colori
    $null = '<h1 style="color:black"> Inserisci una password </h1>';
    $green = '<h1 style="color:green"> Password corretta </h1>';
    $red = '<h1 style="color:red"> Password errata! </h1>';

    //Creo la varibile per il mio _GET di ricerca
    $chiamata = $_GET['password'];

    //Se la mia ricerca password= ha dato questi risultati....
    if (empty($chiamata)) { //Se è vuota...
        echo $null;
    } else
    if (strpos($chiamata, 'Boolean') !== false) { //Se include 'Boolean'....
        echo $green;
    } else{
        echo $red;
    };

   ?>

    </body>
</html>
