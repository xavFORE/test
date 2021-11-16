<?php

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
         
function ecritEnGrand( $mes , $style = "" )
{
    if ( $style != "" )
        $style = " class='$style'";

    $mes = strtoupper( $mes );
    printSL( "<h1$style>$mes</h1>" );
}

function lienVers($titre, $source)
{
    $struc = "";
    $struc .= "<a href='$source'>$titre</a>";
    return $struc;
}

function afficheTableau( $tab, $class = "")
{
    printSL("<table>");

    if ($class != "")
        $class = " class='$class'";

    foreach ($tab as $key => $value) {

        printSL( "<tr>" );

        $code = fabriqueBalise( "td", $key, $class );
        print( $code );

        printSL("<td$class>=></td>");

        $code1 = fabriqueBalise( "td", $value, $class );
        print($code1);

        printSL( "</tr>" );
    }

    printSL("</table><br>");
}

function fabriqueBalise( $balise, $data, $class )
{
    $code = "<$balise$class>$data</$balise>\n";
    return $code;
}

?>