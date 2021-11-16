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
    printSL( '<link rel="stylesheet" href="monCssAS.css">');
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

function afficheTableau($horaires, $contenue_td= ""){
    PrintSL("<table>");
    foreach ($horaires as $key => $value) {
        if ($value == "fermé") {
            printSL("<tr>".'<td class="'.$contenue_td.'">'. $key ."</td>".'<td class="'.$value.'">'.$value."</td> "."</tr><br>");
    
        }
        else {
            printSL("<tr>".'<td class="'.$contenue_td.'">'. $key ."</td>"."<td>".$value."</td> "."</tr><br>");
        }
        }
    PrintSL("</table>");
}



/*
sauver le travail courant -> 
git status
git add ........
git commit
*/
