<?php

// print Saut de Ligne
function printSL( $mes )
{
    print( $mes."\n" );
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
    printSL( '<link rel="stylesheet" href="monCSS.css">');
    printSL( '</head>');
    printSL( '<body>');
}   

function pied()
{
    printSL( '</body>');
    printSL( '</html>');
}
         
function ecritEnGrand( $mes )
{
    $mes = strtoupper( $mes );
    printSL( "<h1>$mes</h1>" );
       
    <h1 class="enGrand">bonjour TOTO !!</h1>
    <h1 class="enMoyen">bonjour TOTO !!</h1>
}


?>