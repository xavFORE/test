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
         
function ecritEnGrand( $mes, $class="" )
{
    if ( $class != "" )
        $class = " class='$class'";

    $mes = strtoupper( $mes );
    fabriqueBalise("h1", $mes, $class);
}

function lienVers( $mes, $cible )
{
    $herf = "href=\"$cible\"";
    fabriqueBalise("a ", $mes, $herf);
}

function afficheTableau( $tablo, $class )
{
    printSL( "<table class='$class'>" );
    foreach ($tablo as $jour => $heures ) 
    {
       printSL( "<tr>" );
            
            fabriqueBalise( "td", $jour );
            fabriqueBalise( "td", $heures );

       printSL( "</tr>" );
    }
    printSL( "</table>" );
}
function fabriqueBalise($lettre, $valeur, $style = ""){
    if ($style == "") {
    PrintSL("<".$lettre.">".$valeur."</".$lettre.">");
    }
    else {
        PrintSL("<".$lettre.$style.">".$valeur."</".$lettre.">");
        // <h1 class="enGrand">bonjour TOTO !!</h1>
    }
}
/*
sauver le travail courant -> 
git status
git add ........
git commit
*/


?>