<?php
function printSL ($mes){
    print($mes."\n");
}

function entete( $titre )
{
    printSL( '<!DOCTYPE html>');
    printSL( '<html lang="fr">');
    printSL( '<head>');
    printSL( '    <meta charset="UTF-8">');
    printSL( '    <meta http-equiv="X-UA-Compatible" content="IE=edge">');
    printSL( '    <meta name="viewport" content="width=device-width, initial-scale=1.0">');
    printSL( "    <title>$titre</title>");
    printSL( '</head>');
    printSL( '<body>');
}  

function ecritEnGrand( $text)
{
    printSL('<h1>'.strtoupper($text).'</h1>');
}


function pied()
{
    printSL( '</body>');
    printSL( '</html>');
}



?>