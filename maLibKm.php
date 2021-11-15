<?php

function entete( $titre )
{
    sL( '<!DOCTYPE html>');
    sL( '<html lang="fr">');
    sL( '<head> ');
    sL( '    <meta charset="UTF-8">');
    sL( '    <meta http-equiv="X-UA-Compatible" content="IE=edge">');
    sL( '    <meta name="viewport" content="width=device-width, initial-scale=1.0">');
    sL( "    <title>$titre</title>");
    sl('<link rel="stylesheet" href="monCSS.css">');
    

    sL( '</head>');
    sL( '<body>');
}   

function pied()
{
    sL( '</body>');
    sL( '</html>');
}

function ecritEnGrand($titre, $class){
    sL( "<h1 class='$class'>$titre</h1>");
}

function sL( $l ){
    print($l."\n");
}



?>