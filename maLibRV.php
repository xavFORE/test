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
    printSL( '<link rel="stylesheet" href="monCSSRV.css">');
    printSL( '</head>');
    printSL( '<body>');
}   

function pied()
{
    printSL( '</body>');
    printSL( '</html>');
}
         
function ecritEnGrand( $mes, $class="" )
{
    if ( $class != "" )
        $class = " class='$class'";

    $mes = strtoupper( $mes );
    printSL( "<h1$class>$mes</h1>" );
    //printSL( '<h1 class="'.$class.'">'.$mes.'</h1>' );
    // <h1 class="enGrand">bonjour TOTO !!</h1>
    // <h1 class="enMoyen">bonjour TOTO !!</h1>
}

function lienVers( $mes, $cible )
{
    printSL( "<a href=\"$cible\">$mes</a>"   );
}

function afficheTableau( $horaire, $class="" ) 
{   $class = " class='$class'";
    printSL( "<table $class>");
    foreach ($horaire as $jour => $heure) {
        printSL("<tr $class>");
           printSL ("<td $class>$jour</td>");
           printSL ("<td $class>$heure</td>");      
        printSL("</tr>");
    }
    printSL( "</table>");

}







/*
sauver le travail courant -> 
git status
git add ........
git commit
*/


?>
