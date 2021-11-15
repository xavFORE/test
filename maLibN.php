<?php
// print Saut de Ligne
function printSL( $ecrit )
{
    print( $ecrit."\n" );
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

function ecritEnGrand($ecrit, $class="")
{
    $ecrit = strtoupper($ecrit);
    if ($class) {
        printSL('<h1 class="'.$class.'">'.$ecrit.'</h1>');
    }
    else
    printSL('<h1>'.$ecrit.'</h1>');
    
    
}

function pied()
{
    print( '</body>');
    print( '</html>');
}



?>