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
    if ( $class != "" )
    $class = " class='$class'";

$ecrit = strtoupper( $ecrit );
printSL( "<h1$class>$ecrit</h1>" );
//printSL( '<h1 class="'.$class.'">'.$ecrit.'</h1>' );
// <h1 class="enGrand">bonjour TOTO !!</h1>
// <h1 class="enMoyen">bonjour TOTO !!</h1>
    
    
}

function lienVers($informations, $source)
{
    print("<a href='$source'>$informations</a>");
}

function afficheTableau($tabLo)
{
    print("<table>");

    foreach ($tabLo as $key => $value) 
    {

        print("<tr><td>$key</td><td>--></td><td>$value</td></tr>");
    }
    print("</table>");

}

function pied()
{
    print( '</body>');
    print( '</html>');
}



?>